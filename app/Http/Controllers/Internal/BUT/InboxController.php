<?php

namespace App\Http\Controllers\Internal\BUT;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Notification;
use App\Models\Project;
use Yajra\Datatables\Datatables;

class InboxController extends BaseController
{

    /**
     * Inbox index page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('internal.but.inbox.index');
    }

    /**
     * Get data by ajax
     * @param $request
     * @return mixed
     */
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $rows = Notification::BUT();
            return Datatables::of($rows)
                //TODO title
                ->addColumn('info', function ($r) {
                    return $r->application->payment->processing_fee->name;
                })
                //TODO check status
                ->editColumn('status', function ($r) {
                    return 'Pengesahan Permohonan';
                })
                ->addColumn('date', function ($r) {
                    return $r->created_at->formatLocalized(config('app.date_format'));;
                })
                ->make(true);
        }
    }
}