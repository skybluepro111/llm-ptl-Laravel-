<?php

namespace App\Http\Controllers\Internal\BKPA;

use Event;
use App\Events\BKPA\PaymentWasConfirmed;
use App\Events\BKPA\PaymentWasRejected;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Application;
use App\Models\Payment;
use App\Models\Responsibility;
use App\Models\Phase;
use App\Helpers\Helper;
use Illuminate\Support\Facades\App;
use Yajra\Datatables\Datatables;

class ReceiptController extends BKPAController
{
    /**
     * Index page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $navbar = $this->navbar;
        return view('internal.bkpa.receipt.index', compact('navbar'));
    }

    /**
     * Get all payments
     * @return json
     */
    public function getData()
    {
        $responsibility = Responsibility::whereName('payment_verification')->first();
        $ids = collect(Phase::whereResponsibilityId($responsibility->id)->get())->pluck('application_id');
        $rows = Application::findMany($ids);

        return Datatables::of($rows)
            ->addColumn('app_id', function ($r) {
                return $r->app_id;
            })
            ->addColumn('category_fee', function ($r) {
                //return $r->payment->processing_fee->name;
                $fee_detail = trans('apply.first.types.'.$r->type);
                if($r->payment->processing_fee->name !=''){
                    $fee_detail .= ' - '.$r->payment->processing_fee->name;
                }

                return $fee_detail;
            })
            ->addColumn('breakdown', function ($r) {
                return view('internal.bkpa._partials.breakdown', compact('r'));
            })
            ->addColumn('sum', function ($r) {
                return 'RM ' . $r->payment->sum;
            })
            ->addColumn('date', function($r){
                return $r->payment->payment_date->formatLocalized(config('app.date_format'));
            })
            ->addColumn('state', function ($r) {
                return trans('apply.third.banks')[$r->payment->bank];
            })
            ->editColumn('status', function ($r) {
                return 'Confirmation Payment Fee';
            })
            ->editColumn('slug', function($r){
                $pay = $r->documents->pay;
                $slug = $r->payment->slip_num;
                $id = $r->id;
                return view('internal.bkpa._partials.slug', compact('pay', 'slug', 'id'));
            })
            ->addColumn('action', function($r){
                return view('internal.bkpa._partials.action', compact('r'));
            })
            ->make(true);
    }

    /**
     * Get content for modal window Action
     *
     * @param Request $request
     * @param Payment $payment
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function getActionForm(Request $request, Payment $payment)
    {
        if ($request->ajax()) {
//          TODO Name of user/company
            return view('internal.bkpa._partials.actionModal', compact('payment'));
        }
    }

    /**
     * @param Request $request
     * @param Payment $payment
     */
    public function action(Request $request, Payment $payment)
    {
        if ($request->ajax()) {
            $status = $request->get('status');
            switch ($status) {
                case 'accepted':
                    $payment->fill($request->all());
                    $payment->status = $status;
                    $payment->save();
                    if ($request->hasFile('official_payment_slip')):
                        $application = $payment->application;
                        $path = Helper::generatePath($application->id);
                        $file = $request->file('official_payment_slip');
                        $save_file = 'official_payment_slip_'.time().'.'.$file->extension();
                        $file->move($path, $save_file);

                        $documents = $application->documents;
                        $documents->pay = 'pay_' . $save_file;
                        $application->documents = json_encode($documents);
                        $application->update();
                    endif;

                    Event::fire(new PaymentWasConfirmed($payment));
                    break;
                case 'not accepted':
                    Event::fire(new PaymentWasRejected($payment));
                    break;
            }
        }
    }

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
        return view('internal.bkpa.receipt.info.index', compact('application', 'tabs', 'navbar'));
    }
}