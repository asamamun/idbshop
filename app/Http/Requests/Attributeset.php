<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Contracts\Validation\Validator;


class Attributeset extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'name' => 'required|max:50',
            'content' => 'required|max:191',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => 'A name is required',
            'name.max' => 'Max 50 characters',
            'content.required'  => 'A content is required',
            'content.max'  => 'Maximum 191 characters',
        ];
    }
}
