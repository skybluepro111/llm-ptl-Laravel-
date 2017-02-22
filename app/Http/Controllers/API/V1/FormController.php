<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\API\Controller;
use App\Transformers\API\ProjectTransformer;
use App\Models\Project;
use App\Models\Data\Inspection;
use App\Helpers\Helper;
use App\Http\Requests\API\FormRequest;

/**
 * Class FormController
 * @package App\Http\Controllers\API
 */
class FormController extends Controller
{

    /**
     * @param FormRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function show(FormRequest $request)
    {
        try {
            $data = $request->all();
            $inspection = Inspection::whereProjectId($request->input('project_id'))->get();
            $inspection->update($data);

            return $this->respond(['update' => 'success']);
        } catch (\Exception $e) {
            return $this->respond(['update' => 'fail']);
        }

    }
}