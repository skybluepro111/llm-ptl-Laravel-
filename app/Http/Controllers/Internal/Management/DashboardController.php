<?php

namespace App\Http\Controllers\Internal\Management;

use Illuminate\Http\Request;
use App\Http\Requests;
use App\Http\Controllers\Internal\Management\ManagementController;

class DashboardController extends ManagementController
{
    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('internal.management.dashboard.index');
    }

}