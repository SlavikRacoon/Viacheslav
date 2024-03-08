<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rules\Password;

class UserCreateRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string', 'max:30', 'unique:users'],
            'email' => ['required','email:rfc,dns', 'unique:users'],
            'password' => ['required', Password::min(8)->letters()->mixedCase()->numbers()->symbols()->uncompromised()],
            'phone' => ['required'],
            'avatar' => ['nullable', 'string'],
        ];
    }
    public function messages(): array
    {
        return
            [
                'name.required' => 'Name is required',
                'name.string' => 'Name type must be string',
                'name.max' => 'Name must be from 1 to 30 symbols',
                'name.unique' => 'Name must be unique',

                'email.required' => 'Email is required',
                'email.unique' => 'Email must be unique',

                'password.required' => 'Password is required',
                'password.min' => 'Password must have more than 8 string',

                'phone.required' => 'Password is required',

                'avatar.string' => 'Avatar path type must be string',

            ];

    }
}
