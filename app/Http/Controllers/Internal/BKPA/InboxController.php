<?php

namespace App\Http\Controllers\Internal\BKPA;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Application;
use App\Models\Notification;
use Yajra\Datatables\Datatables;


class InboxController extends BKPAController
{
    public function index()
    {
        $navbar = $this->navbar;
        return view('internal.bkpa.inbox.index', compact('navbar'));
    }

    public function getData()
    {
        $rows = Notification::BKPA();

        return Datatables::of($rows)
            ->editColumn('id', function($r){
                return $r->id . '.';
            })
            ->addColumn('info', function($r){
                return $r->application->payment->processing_fee->name;
            })
            ->addColumn('date', function($r){
                return $r->created_at->formatLocalized(config('app.date_format'));
            })
            ->editColumn('status', function($r){
                return trans('status.payment_approval');
            })
            ->make(true);
    }
}