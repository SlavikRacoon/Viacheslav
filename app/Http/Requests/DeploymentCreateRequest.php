<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class DeploymentCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'commit_hash' => ['required', 'string', 'max:300'],
            'environment_id' => ['required', 'integer', 'exists:environments,id'],
        ];
    }
    public function messages(): array
    {
        return
            [
                'commit_hash.required' => 'Commit hash is required',
                'commit_hash.string' => 'Commit hash type must be string',
                'commit_hash.max' => 'Commit hash must be from 1 to 300 symbols',

                'environment_id.required' => 'Environment id is required',
                'environment_id.string' => 'Environment id type must be integer',
                'environment_id.exists' => 'Environment id does not exists',

            ];

    }
}
