<?php

namespace App\Http\Controllers;

use App\Models\Application;
use Auth;
use View;
use Illuminate\Http\Request;
use App\Http\Requests;
use Yajra\Datatables\Datatables;
use App\Models\Data\Development_Details;

/**
 * Class DashboardController
 * @package App\Http\Controllers
 */
class DashboardController extends Controller
{
    /**
     * @var array
     */
    private $navbar;

    /**
     * @var array
     */
    private $updateApp;

    public function __construct()
    {
        $this->navbar = [
            [
                'title' => trans('dash.applications.title'),
                'href' => route('dashboard.index'),
                'count' => Auth::user()->applications->count(),
                'icon' => 'zmdi-layers'
            ],
            [
                'title' => trans('dash.apply.title'),
                'href' => route('apply.index'),
                'count' => null,
                'icon' => 'zmdi-sign-in'
            ]
        ];
        View::share('navbar', $this->navbar);

        $this->updateApp = [
            'submit_application',
            'updating_application'
        ];
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('dashboard.index');
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function getData(Request $request)
    {
        if ($request->ajax()) {
//        $responsibility = Responsibility::whereName('submit_application')->first();
//        $ids = collect(Phase::whereResponsibilityId($responsibility->id)->get())->pluck('application_id');
//        $rows = Application::findMany($ids);
        $rows = Auth::user()->applications;

            return Datatables::of($rows)
                ->addColumn('category', function ($r) {
                    if (isset($r->payment->processing_fee->name)):
                        $fee_detail = trans('apply.first.types.'.$r->type);
                        $fee_detail .= ' - '.$r->payment->processing_fee->name;
                        return $fee_detail;
                    else:
                        return trans('general.none');
                    endif;
                })
                ->addColumn('apply_date', function ($r) {
                    return \Helper::dateFormat($r->created_at);
                })
                ->addColumn('sum', function ($r) {
                    if (isset($r->payment->sum)):
                        return $r->payment->sum;
                    else:
                        return 0;
                    endif;
                })
                ->addColumn('action', function ($r) {
                    $action = '';
                    if ( !empty($r->phase->responsibility->name) && in_array($r->phase->responsibility->name, $this->updateApp)) {
                        $action = view('dashboard._partials.actions', compact('r'));
                    }
                    return $action;
                })
                ->make(true);
        }
    }

    /**
     * @param Application $application
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function editApplication(Application $application)
    {
        $type = $application->type;
        session(['application' => $application->id]);
        return redirect(route('apply.third', $type));
    }

}
