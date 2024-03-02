<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class OwnerCreateRequest extends FormRequest
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
            'car_id' => ['required', 'integer', 'exists:cars,id'],
        ];
    }
    public function messages(): array
    {
        return
            [
                'name.required' => 'Name owner is required',
                'name.string' => 'Name owner type must be string',
                'name.max' => 'Name owner must be from 1 to 30 symbols',

                'car_id.required' => 'car_id is required',
                'car_id.string' => 'car_id type must be integer',
                'car_id.exists' => 'car_id does not exists',

            ];

    }
}
