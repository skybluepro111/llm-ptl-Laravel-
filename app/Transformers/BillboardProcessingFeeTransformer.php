<?php

namespace App\Transformers;

use App\Models\Fees\Ad\ServicesFee;
use League\Fractal\TransformerAbstract;

class BillboardProcessingFeeTransformer extends TransformerAbstract
{

    public function transform(ServicesFee $fee)
    {
        return [
            'name' => $fee->name . ' - ' .
                $fee->amount .
                ' ' .
                trans('general.currency.symbol'),
            'id' => (int)$fee->id
        ];
    }
}