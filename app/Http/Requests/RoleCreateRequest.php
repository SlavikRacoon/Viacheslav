<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RoleCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'roleName' => ['required', 'string', 'max:30'],
        ];
    }
    public function messages(): array
    {
        return
            [
                'roleName.required' => 'Role name is required',
                'roleName.string' => 'Role name  type must be string',
                'roleName.max' => 'Role name  must be from 1 to 30 symbols',
            ];

    }
}
