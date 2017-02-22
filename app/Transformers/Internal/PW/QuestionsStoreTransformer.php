<?php

namespace App\Transformers\Internal\PW;

use App\Http\Requests\Internal\PW\QuestionsStoreRequest;

class QuestionsStoreTransformer
{
    public static function transform(QuestionsStoreRequest $request, $project_id)
    {
        $trash = ['_token'];
        $general = [
            'visit',
            'location',
            'direction',
            'applicant',
            'concessionaire',
            'officer',
            'feedback',
            'status'
        ];
        $files = [
            'file1',
            'file2',
            'file3',
            'file4',
            'file5'
        ];

        $general = $request->only($general);
        $data = json_encode($request->except(array_merge($trash, $general, $files)));

        return array_merge($general, [
            'project_id' => $project_id,
            'questions' => $data
        ]);
    }
}