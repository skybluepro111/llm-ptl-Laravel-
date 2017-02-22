<?php

namespace App\Http\Controllers\Internal\BUT;

use Event;
use App\Events\BPO\ProjectWasConfirmedByBPO;
use App\Events\BPO\ProjectWasRejectedByBPO;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Project;
use App\Models\Data\Concessionaire;
use Yajra\Datatables\Datatables;
use App\Models\Data\Office;

class ProjectController extends BaseController
{
    /**
     * Index page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('internal.but.project.index');
    }

    /**
     * Get active projects
     * @return mixed
     */
    public function getData()
    {
        $rows = Project::BUT();

        return Datatables::of($rows)
            ->addColumn('type', function ($r) {
                return $r->application->payment->fee->development_type->name;
            })
            ->editColumn('num', function ($project) {
                return view('internal.but._partials.slug', compact('project'));
            })
            ->addColumn('date_application', function ($r) {
                return $r->application->created_at->formatLocalized(config('app.date_format'));
            })
            ->addColumn('action', function ($r) {
                return view('internal.bpo._partials.action', compact('r'));
            })
            ->make(true);
    }

    /**
     * Get project info
     * @param Project $project
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function info(Project $project)
    {
        $tabs = [
            [
                'title' => trans('bpo.application.info.tabs.company'),
                'id' => 'company'
            ],
            [
                'title' => trans('bpo.application.info.tabs.project'),
                'id' => 'project'
            ],
        ];

        $application = $project->application;
        $type           = $application->type;
        $inspections    = $project->inspection;
        $documents      = BaseController::getDocuments(
            $project,
            $project->application
        );
        return view('internal.bpo.project.info.index',
            compact('project', 'tabs', 'application', 'type',
                'inspections', 'documents'));
    }

    /**
     * Get content for modal window Action
     *
     * @param Request $request
     * @param Project $project
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getModal(Request $request, Project $project)
    {
        if ($request->ajax()) {
            $concessionaires = Concessionaire::all();
            $offices = Office::all()->lists('name', 'id');
            return view('internal.but.project._partials.actionModal', compact(
                'project', 'concessionaires', 'offices'
            ));
        }
    }

    /**
     * @param Request $request
     * @param Project $project
     */
    public function postModal(Request $request, Project $project)
    {
        if ($request->ajax()) {
            $status = $request->get('status');
            switch ($status) {
                case 'on':
                    Event::fire(new ProjectWasConfirmedByBPO($project));
                    break;
                case null:
                    Event::fire(new ProjectWasRejectedByBPO($project));
                    break;
            }
        }
    }
}