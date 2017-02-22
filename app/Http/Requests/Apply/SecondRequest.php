<?php

namespace App\Http\Requests\Apply;

use App\Http\Requests\Request;

class SecondRequest extends Request
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
        $rules = [
            'highway_id' => 'required|integer',
            'location' => 'required|numeric|between:0,9999.99',
            'lat' => 'required',
            'lng' => 'required',
            'design_concept' => 'required|file|max:5000',
            //'location_plan' => 'required|file|max:5000',
            //'image_location' => 'required|file|max:5000',
            //'review_letter' => 'required|file|max:5000',
            //'structure' => 'required|file|max:5000',
            'verify-1' => 'accepted',
            'verify-2' => 'accepted',
            'verify-3' => 'accepted'
        ];

        $type = $this->segment(2);
        switch ($type) {
            case 'billboard':
                $rules = array_merge($rules, [
                    'area' => 'required|min:2',
                    'direction' => 'required|min:2',
                    'from_city' => 'required|min:2',
                    'to_city' => 'required|min:2',
                    'zone_id' => 'required|numeric',
                    'authority_id' => 'required',
                    'image_location' => 'required|file|max:5000'
                ]);
                break;
            case 'highway':
                break;
        }

        return $rules;
    }
}
