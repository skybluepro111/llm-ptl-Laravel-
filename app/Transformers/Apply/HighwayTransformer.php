<?php

namespace App\Transformers\Apply;

use App\Transformers\Transformer;
use App\Models\Data\Highway;
use League\Fractal\TransformerAbstract;

class HighwayTransformer extends TransformerAbstract
{

    public function transform(Highway $highway)
    {
        return [
            'name' => $highway->name . ' - ' . $highway->short,
            'coordinates' => $highway->lat . ';' . $highway->lng,
            'id' => $highway->id
        ];
    }
}