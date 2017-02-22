<?php

namespace App\Http\Controllers\Internal\BPO;

use App\Models\Data\Office;
use Illuminate\Http\Request;
use App\Events\BPO\ApplicationAccepted;
use App\Events\BPO\ApplicationRejected;
use App\Http\Requests;
use App\Models\Application;
use App\Models\Responsibility;
use App\Models\Phase;
use Yajra\Datatables\Datatables;

class ApplicationController extends BPOController
{
    /**
     * @var string
     */
    private $type = 'highway';

    /**
     * Index page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $navbar = $this->navbar;
        return view('internal.bpo.application.index', compact('navbar'));
    }

    /**
     * Get applications
     * @return mixed
     */
    public function getData()
    {
        $responsibility = Responsibility::whereName('application_acceptance')->first();
        $ids = collect(Phase::whereResponsibilityId($responsibility->id)->get())->pluck('application_id');
        $rows = Application::whereIn('id', $ids)->whereType($this->type)->get();

        return Datatables::of($rows)
            ->addColumn('type', function ($r) {
                return trans('application.types')[$r->type];
            })
            ->addColumn('breakdown', function ($r) {
                return view('internal.bpo._partials.breakdown', compact('r'));
            })
            ->addColumn('applicant', function ($r) {
                return $r->user->details->name;
            })
            ->addColumn('date_application', function ($r) {
                return $r->created_at->formatLocalized(config('app.date_format'));
            })
            ->addColumn('action', function ($r) {
                return view('internal.bpo._partials.action', compact('r'));
            })
            ->make(true);
    }

    public function getInfo(Request $request, Application $application)
    {
        $tabs = [
            [
                'title' => trans('bpo.application.info.tabs.company'),
                'id' => 'company'
            ],
            [
                'title' => trans('bpo.application.info.tabs.project'),
                'id' => 'project'
            ]
        ];
        $navbar = $this->navbar;
        return view('internal.bpo.application.info.index', compact('application', 'tabs', 'navbar'));
    }

    /**
     * Show action modal
     * @param Application $application
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getModal(Application $application)
    {
        $offices = Office::lists('name', 'id');
        return view('internal.bpo._partials.actionModal', compact('application', 'offices'));
    }

    /**
     * Change application by BPO
     * @param Request $request
     * @return void
     */
    public function postModal(Request $request)
    {
        $application = Application::find($request->get('application_id'));
        $application->fill($request->all());
        $application->update();

        $status = $request->get('status');
        switch ($status) {
            case '1':
                event(new ApplicationAccepted($application));
                break;

            case '0':
                event(new ApplicationRejected($application));
                break;
        }
    }

}