<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Laravel\Fortify\Contracts\UpdatesUserProfileInformation;

class UpdateUserProfileInformation implements UpdatesUserProfileInformation
{
    /**
     * Validate and update the given user's profile information.
     *
     * @param  array<string, string>  $input
     */
    public function update(User $user, array $input): void
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'photo' => ['nullable', 'mimes:jpg,jpeg,png', 'max:1024'],
            'profile' => ['nullable', 'string', 'max:2000'],
        ])->validateWithBag('updateProfileInformation');

        if (isset($input['company'])) {
            Validator::make($input, [
                'company.name' => ['required', 'string', 'max:255'],
                'company.profile' => ['nullable', 'string', 'max:255'],
                'company_photo' => ['nullable', 'mimes:jpg,jpeg,png,webp', 'max:1024'],
            ])->validateWithBag('updateProfileInformation');
        }
        if (isset($input['photo'])) {
            $user->updateProfilePhoto($input['companyphoto']);
        }

        if (isset($input['company_photo'])) {
            $user->company->updateProfilePhoto($input['company_photo']);
        }
        if ($input['email'] !== $user->email &&
            $user instanceof MustVerifyEmail) {
            $this->updateVerifiedUser($user, $input);
        } else {
            $user->forceFill([
                'name' => $input['name'],
                'email' => $input['email'],
            ])->save();
        }

        if (isset($input['company'])) {
            $user->company->forceFill([
                'name' => $input['company']['name'],
                'profile' => $input['company']['profile'],
            ])->save();
        }
    }


    /**
     * Update the given verified user's profile information.
     *
     * @param  array<string, string>  $input
     */
    protected function updateVerifiedUser(User $user, array $input): void
    {
        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
            'email_verified_at' => null,
            'profile' => $input['profile'],
        ])->save();

        $user->sendEmailVerificationNotification();
    }
}
