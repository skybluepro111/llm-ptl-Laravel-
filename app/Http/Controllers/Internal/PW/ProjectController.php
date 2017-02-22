<?php

namespace App\Http\Controllers\Internal\PW;

use Event;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Application;
use App\Models\Responsibility;
use App\Models\Phase;
use App\Models\Project;
use App\Models\Data\Inspection;
use App\Helpers\Helper;
use Yajra\Datatables\Datatables;
use App\Http\Requests\Internal\Pw\QuestionsStoreRequest;
use App\Transformers\Internal\Pw\QuestionsStoreTransformer;
use App\Events\PW\ProjectAccepted;

class ProjectController extends PWController
{

    /**
     * Index page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('internal.pw.project.index');
    }

    /**
     * Get applications
     * @return mixed
     */
    public function getData()
    {
        $responsibility = Responsibility::whereName('technical_review')->first();
        $ids = collect(Phase::whereResponsibilityId($responsibility->id)->get())->pluck('application_id');
        $rows = Application::findMany($ids);

        return Datatables::of($rows)
            ->addColumn('project', function ($r) {
                return $r->project->slug;
            })
            ->addColumn('type', function ($r) {
                return 'Display Advertising' . $r->payment->type;
            })
            ->addColumn('company', function ($r) {
                return $r->user->details->name;
            })
            ->addColumn('date', function ($r) {
                return $r->created_at->formatLocalized(config('app.date_format'));
            })
            ->addColumn('action', function ($r) {
                return view('internal.pw.project._partials.action', compact('r'));
            })
            ->make(true);
    }

    /**
     * @param Request $request
     * @param Project $project
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getModal(Request $request, Project $project)
    {
        if ($request->ajax()) {
            return view('internal.pw.project._partials.actionModal', compact('project'));
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
                case 'accepted':
                    $project->fill($request->all());

                    if($request->hasFile('document')) {
                        $storagePath = storage_path(
                            'app\application\\'.$project->application->id);
                        $title = 'pw.' . $request->document->extension();
                        $request->file('document')->move(
                            $storagePath,
                            $title
                        );
                        $document = [
                            'pw' => $title
                        ];
                        $project->documents = $project->documents->merge($document)->toArray();
                    }
                    $project->save();
                    Event::fire(new ProjectAccepted($project));
                    break;
                case 'not accepted':
//                    Event::fire(new PaymentWasRejected($payment));
                    break;
            }
        }
    }

    /**
     * @param Project $project
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getQuestions(Project $project)
    {
        $type = $project->application->type;
        $inspection = $project->inspection;
        return view('internal.pw.project.questions.' . $type, compact('project', 'inspection'));
    }

    /**
     * @param QuestionsStoreRequest $request
     * @param Project $project
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function storeQuestions(QuestionsStoreRequest $request, Project $project)
    {
        $inspection = new Inspection();
        $data = QuestionsStoreTransformer::transform($request, $project->id);
        $inspection->fill($data);
        $inspection->save();
        return redirect(route('internal.pw.project.index'));
    }
}