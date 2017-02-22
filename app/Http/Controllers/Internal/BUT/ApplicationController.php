<?php

namespace App\Http\Controllers\Internal\BUT;

use App\Models\Data\Office;
use App\Models\Notification;
use Illuminate\Http\Request;
use App\Events\BPO\ApplicationAccepted;
use App\Events\BPO\ApplicationRejected;
use App\Http\Requests;
use App\Models\Application;
use App\Models\Responsibility;
use App\Models\Phase;
use Yajra\Datatables\Datatables;

class ApplicationController extends BaseController
{
    /**
     * @var string
     */
    private $type = 'billboard';

    /**
     * Index page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('internal.but.application.index');
    }

    /**
     * Get applications
     * @return mixed
     */
    public function getData()
    {
//        $responsibility = Responsibility::whereName('application_acceptance')->first();
        $ids = collect(Notification::whereDepartment('but')->get())->pluck('application_id');
        $rows = Application::whereIn('id', $ids)->whereType($this->type)->get();

        return Datatables::of($rows)
            ->addColumn('type', function ($r) {
                //return trans('application.types')[$r->type];
                if($r->payment->processing_fee->name !=''){
                    return $r->payment->processing_fee->name;
                }
                else{
                    return '';
                }

            })
            ->addColumn('breakdown', function ($r) {
                return view('internal.but._partials.breakdown', compact('r'));
            })
            ->addColumn('applicant', function ($r) {
                return $r->user->details->name;
            })
            ->addColumn('date_application', function ($r) {
                return $r->created_at->formatLocalized(config('app.date_format'));
            })
            ->addColumn('action', function ($r) {
                return view('internal.but._partials.action', compact('r'));
            })
            ->make(true);
    }

    /**
     * @param Application $application
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getInfo(Application $application)
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
        return view('internal.but.application.info.index', compact('application', 'tabs', 'navbar'));
    }

    /**
     * Show action modal
     * @param Application $application
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getModal(Application $application)
    {
        $offices = Office::lists('name', 'id');
        return view('internal.but._partials.actionModal', compact('application', 'offices'));
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