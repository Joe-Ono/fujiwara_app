<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GroupuseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'group_name' => 'required|string|max:50',
            'representative_name' => 'required|string|max:50',
            'email' => 'required|string|max:50',
            'post_code' => 'required|string|max:50',
            'adrress' => 'required|string|max:50',
            'phone_number' => 'required|string|max:50',
            'workplace' => 'required|string|max:50',
            'workplace_phone_number' => 'required|string|max:50',
            'date_of_use' => 'required|string|max:50',
            'time_of_use' => 'required|string|max:50',
            'facilities_to_use' => 'required|string|max:50',
            'equipment_to_use'=> 'required|string|max:50',
            'activity_contents' => 'required|string|max:2000',
            'member1_name' => 'required|string|max:50',
            'member1_adress' => 'required|string|max:50',
            'member2_name' => 'required|string|max:50',
            'member2_adress' => 'required|string|max:50',
            'member3_name' => 'required|string|max:50',
            'member3_adress' => 'required|string|max:50',
            'member4_name' => 'required|string|max:50',
            'member4_adress' => 'required|string|max:50',
            'member5_name' => 'required|string|max:50',
            'member5_adress' => 'required|string|max:50',
            'member6_name' => 'required|string|max:50',
            'member6_adress' => 'required|string|max:50',
            'member7_name' => 'nullable|string|max:50',
            'member7_adress' => 'nullable|string|max:50',
            'member8_name' => 'nullable|string|max:50',
            'member8_adress' => 'nullable|string|max:50',
            'member9_name' => 'nullable|string|max:50',
            'member9_adress' => 'nullable|string|max:50',
            'member10_name' => 'nullable|string|max:50',
            'member10_adress' => 'nullable|string|max:50',
            'member11_name' => 'nullable|string|max:50',
            'member11_adress' => 'nullable|string|max:50',
            'member12_name' => 'nullable|string|max:50',
            'member12_adress' => 'nullable|string|max:50',
            'member13_name' => 'nullable|string|max:50',
            'member13_adress' => 'nullable|string|max:50',
            'member14_name' => 'nullable|string|max:50',
            'member14_adress' => 'nullable|string|max:50',
            'member15_name' => 'nullable|string|max:50',
            'member15_adress' => 'nullable|string|max:50',
            'member16_name' => 'nullable|string|max:50',
            'member16_adress' => 'nullable|string|max:50',
            'member17_name' => 'nullable|string|max:50',
            'member17_adress' => 'nullable|string|max:50',
            'member18_name' => 'nullable|string|max:50',
            'member18_adress' => 'nullable|string|max:50',
            'member19_name' => 'nullable|string|max:50',
            'member19_adress' => 'nullable|string|max:50',
            'member20_name' => 'nullable|string|max:50',
            'member20_adress' => 'nullable|string|max:50',            
        ];
    }
}
