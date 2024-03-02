<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarCreateManualRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'model' => ['required', 'string', 'max:30'],
            'mechanic_id' => ['required', 'integer', 'exists:mechanics,id'],
        ];
    }
    public function messages(): array
    {
        return
            [
                'model.required' => 'Model is required',
                'model.string' => 'Model type must be string',
                'model.max' => 'Model must be from 1 to 30 symbols',

                'mechanic_id.required' => 'Mechanic_id is required',
                'mechanic_id.string' => 'Mechanic_id type must be integer',
                'mechanic_id.exists' => 'Mechanic_id does not exists',

            ];

    }
}
