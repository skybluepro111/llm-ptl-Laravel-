<?php

namespace App\Transformers;

use App\Models\Application;
use League\Fractal\TransformerAbstract;

class ApplicationMessengerTransformer extends TransformerAbstract
{

    public function transform(Application $application)
    {
        return [
            'name' => 'Application ' . $application->id,
            'id' => (int)$application->id
        ];
    }
}