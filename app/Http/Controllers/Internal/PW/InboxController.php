<?php

namespace App\Http\Controllers\Internal\PW;


use Illuminate\Http\Request;
use App\Http\Requests;
use App\Models\Notification;
use Yajra\Datatables\Datatables;

class InboxController extends PWController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $navbar = $this->navbar;
        return view('internal.pw.inbox.index', compact('navbar'));
    }

    /**
     * @return mixed
     */
    public function getData()
    {
        $rows = Notification::PW();
        return Datatables::of($rows)
            //TODO title
            ->addColumn('info', function ($r) {
                return 'Ulasan Siasatan Tapak bagi No Fail Projek' . $r->application->project->slug;
            })
            ->addColumn('date', function ($r) {
                return $r->created_at->formatLocalized(config('app.date_format'));;
            })
            ->make(true);
    }
}