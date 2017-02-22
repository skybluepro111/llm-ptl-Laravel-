<?php

namespace App\Transformers;

use App\Models\Data\Development_Details;
use League\Fractal\TransformerAbstract;

class DevelopmentDetailsTransformer extends TransformerAbstract
{

    public function transform(Development_Details $detail)
    {
        return [
            'name' => $detail->name . ' - ' . $detail->processing_fees->first()->amount . ' ' . trans('general.currency.symbol'),
            'id' => (int)$detail->id
        ];
    }
}