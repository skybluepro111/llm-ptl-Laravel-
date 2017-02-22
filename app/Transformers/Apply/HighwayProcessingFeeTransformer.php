<?php

namespace App\Transformers\Apply;

use App\Models\Fees\Highway\ProcessingFee;
use League\Fractal\TransformerAbstract;

class HighwayProcessingFeeTransformer extends TransformerAbstract
{

    public function transform(ProcessingFee $fee)
    {
        return [
            'name' => $fee->developmentDetail->name . ' - ' . $fee->amount,
            'id' => $fee->id
        ];
    }
}