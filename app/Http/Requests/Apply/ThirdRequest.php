<?php

namespace App\Http\Requests\Apply;

use App\Http\Requests\Request;

class ThirdRequest extends Request
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
//            'development_type_id' => 'required',
            'processing_fee_id' => 'required',
            'quantity' => 'integer',
            'pay' => 'required',
            'slip_num' => 'required',
            'sum' => 'required|integer',
            'payment_date' => 'required|date',
            'bank' => 'required',
            'payment_slip' => 'required|file|max:5000'
        ];
    }
}
