<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
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
            'title' => 'required|string|max:50',
            'body' => 'required|string|max:200',
            'start' => 'required',
            'end' => 'required|after:start',
        ];
    }

    protected function prepareForValidation()
    {
        $start = ($this->filled(['start_date', 'start_time'])) ? $this->start_date . ' ' . $this->start_time : '';
        $end = ($this->filled(['end_date', 'end_time'])) ? $this->end_date . ' ' . $this->end_time : '';
        $this->merge([
            'start' => $start,
            'end' => $end,
        ]);
    }

    public function attributes()
    {
        return [
            'body'  => '詳細',
        ];
    }
}
