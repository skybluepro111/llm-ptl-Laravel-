<?php

namespace App\Http\Requests\Internal\PW;

use App\Http\Requests\Request;

class QuestionsStoreRequest extends Request
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
            'visit' => 'required|date',
            'location' => 'required|between:0,9999.99',
            'direction' => 'required',
            'applicant' => 'required',
            'concessionaire' => 'required',
            'officer' => 'required',
            'feedback' => 'required',
            'status' => 'required|boolean'
        ];
    }
}
