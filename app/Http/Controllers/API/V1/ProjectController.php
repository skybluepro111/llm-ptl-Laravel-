<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\API\Controller;
use App\Transformers\API\ProjectTransformer;
use App\Models\Project;
use App\Helpers\Helper;

/**
 * Class ProjectController
 * @package App\Http\Controllers\API
 */
class ProjectController extends Controller
{

    /**
     * @return \Illuminate\Http\JsonResponse
     */
    public function show()
    {
        $projects = Project::all();

        return $this->respond(Helper::transform($projects, ProjectTransformer::class));
    }
}