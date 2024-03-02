<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MechanicCreateManualRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:30'],
        ];
    }

    public function messages(): array
    {
        return
            [
                'name.required' => 'Mechanic name is required',
                'name.string' => 'Mechanic name type must be string',
                'name.max' => 'Mechanic name must be from 1 to 30 symbols',
            ];

    }
}
