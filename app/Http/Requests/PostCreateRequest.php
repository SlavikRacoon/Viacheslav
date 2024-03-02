<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class PostCreateRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'topic' => ['required', 'string', 'max:30'],
            'text' => ['required', 'string', 'max:300'],
            'user_id' => ['required', 'integer', 'exists:users,id'],
        ];
    }

    public function messages(): array
    {
        return
            [
                'topic.required' => 'Topic is required',
                'topic.string' => 'Topic type must be string',
                'topic.max' => 'Topic must be from 1 to 30 symbols',

                'text.required' => 'Text is required',
                'text.string' => 'Text type must be string',
                'text.max' => 'Text must be from 1 to 300 symbols',

                'user_id.required' => 'User_id is required',
                'user_id.string' => 'User_id type must be integer',
                'user_id.exists' => 'User_id does not exists',

            ];

    }
}
