<?php

namespace App\Http\Requests\Apply;

class BillboardRequest extends SecondRequest
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
        $rules = $this->rules;
        $rules['location'] = 'required|integer';
        $rules['area'] = 'required|min:2';
        $rules['direction'] = 'required|min:2';
        $rules['from_city'] = 'required|min:2';
        $rules['to_city'] = 'required|min:2';
        $rules['lat'] = 'required';
        $rules['lng'] = 'required';
        $rules['zone'] = 'required|min:2';
        $rules['authority'] = 'required|min:2';
        return $rules;
    }
}
