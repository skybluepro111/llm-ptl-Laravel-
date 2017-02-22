<?php

namespace App\Transformers\API;

use App\Models\Project;

class ProjectTransformer extends Transformer
{

    public function transform(Project $project)
    {
        return [
            'id' => (int)$project->id
        ];
    }
}