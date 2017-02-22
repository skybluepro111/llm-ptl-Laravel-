<?php

namespace App\Http\Requests\API;

class FormRequest extends Request
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
            'name' => 'required',
            'project_id' => 'required|exists:projects',
            'password' => 'required|confirmed',
            'phone' => 'required'
        ];
    }
}
