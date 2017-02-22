<?php

namespace App\Http\Controllers\Internal\Management;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Notification;
use App\Models\Project;

class ManagementController extends Controller
{
    /**
     * Navbar
     * @var array
     */
    public $navbar;

    /**
     * InboxController constructor.
     */
    public function __construct()
    {
        $this->navbar = [
            [
                'title' => trans('pw.project.title'),
                'href' => route('internal.pw.project.index'),
                'count' => Project::all()->count(),
                'icon' => 'zmdi-layers'
            ]
        ];
    }
}