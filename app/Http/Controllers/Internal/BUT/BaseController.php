<?php

namespace App\Http\Controllers\Internal\BUT;

use App\Http\Requests;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Project;
use App\Models\Application;
use View;

class BaseController extends Controller
{
    /**
     * Navbar
     * @var array
     */
    public $navbar;

    /**
     * InboxController constructor.
     */
    public function __construct()
    {
        $this->navbar = [
            [
                'title' => trans('but.application.title'),
                'href' => route('internal.but.application.index'),
                'count' => Notification::BUT()->count(),
                'icon' => 'zmdi-layers'
            ],
            [
                'title' => trans('but.project.title'),
                'href' => route('internal.but.project.index'),
                'count' => Project::BUT()->count(),
                'icon' => 'zmdi-layers'
            ]
        ];
        View::share('navbar', $this->navbar);
    }

    /**
     * @param Project $project
     * @param Application $application
     * @return array
     */
    public static function getDocuments(Project $project, Application $application)
    {
        $documents = collect($application->documents);
        $documents = $documents->merge($project->documents);
        return $documents;
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function documentUpload(Request $request)
    {
        if ($request->hasFile('document')) {
            $project = Project::findOrFail($request->project_id);
            $storagePath = storage_path(
                'app\application\\'.$project->application->id);
            $title = str_slug($request->title) . '.' . $request->document->extension();
            $request->file('document')->move(
                $storagePath,
                $title
            );

            $document = [
                $request->title => $title
            ];

            $project->documents = $project->documents->merge($document)->toArray();
            $project->save();
            return redirect()->back();
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postReview(Request $request)
    {
        $project = Project::findOrFail($request->project_id);
        if ($request->hasFile('document')) {
            $storagePath = storage_path(
                'app\application\\'.$project->application->id);
            $title = 'meeting.' . $request->document->extension();
            $request->file('document')->move(
                $storagePath,
                $title
            );

            $document = [
                'meeting' => $title
            ];

            $project->documents = $project->documents->merge($document)->toArray();
            $project->save();
        }
        $meeting = [
            'no'        => $request->input('no'),
            'review'    => $request->input('review'),
            'status'    => $request->input('status'),
        ];
        $project->meeting = $meeting;
        $project->save();
        return redirect()->back();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function postKKR(Request $request)
    {
        $project = Project::findOrFail($request->project_id);
        if ($request->hasFile('document')) {
            $storagePath = storage_path(
                'app\application\\'.$project->application->id);
            $title = 'kkr.' . $request->document->extension();
            $request->file('document')->move(
                $storagePath,
                $title
            );

            $document = [
                'kkr' => $title
            ];

            $project->documents = $project->documents->merge($document)->toArray();
            $project->save();
        }
        $kkr = [
            'status'    => $request->input('kkr-status'),
            'feedback'    => $request->input('feedback'),
        ];
        $project->kkr = $kkr;
        $project->save();
        return redirect()->back();
    }
}