<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class EnvironmentCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'environment_name' => ['required', 'string', 'max:30'],
            'project_id' => ['required', 'integer', 'exists:projects,id'],
        ];
    }
    public function messages(): array
    {
        return
            [
                'environment_name.required' => 'Environment name is required',
                'environment_name.string' => 'Environment name type must be string',
                'environment_name.max' => 'Environment name must be from 1 to 30 symbols',

                'project_id.required' => 'Project id is required',
                'project_id.string' => 'Project id type must be integer',
                'project_id.exists' => 'Project id does not exists',

            ];

    }
}
