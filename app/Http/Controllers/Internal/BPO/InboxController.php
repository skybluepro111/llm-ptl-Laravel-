<?php

namespace App\Http\Controllers\Internal\BPO;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Notification;
use App\Models\Project;
use Yajra\Datatables\Datatables;

class InboxController extends BPOController
{

    /**
     * Inbox index page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index() {
        $navbar = $this->navbar;
        return view('internal.bpo.inbox.index', compact('navbar'));
    }

    /**
     * Get data by ajax
     * @return mixed
     */
    public function getData(Request $request)
    {
        if ($request->ajax()) {
            $rows = Notification::BPO();
            return Datatables::of($rows)
                ->addColumn('info', function ($r) {
                    return $r->application->payment->fee->name;
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