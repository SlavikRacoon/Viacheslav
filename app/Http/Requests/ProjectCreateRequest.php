<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProjectCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'project_name' => ['required', 'string', 'max:30'],
        ];
    }
    public function messages(): array
    {
        return
            [
                'project_name.required' => 'Project name is required',
                'project_name.string' => 'Project name type must be string',
                'project_name.max' => 'Project name must be from 1 to 30 symbols',

            ];

    }
}
