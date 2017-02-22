<?php

namespace App\Http\Controllers\Internal\PW;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Project;
use View;

class PWController extends Controller
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
                'count' => Project::PW()->count(),
                'icon' => 'zmdi-layers'
            ]
        ];
        View::share('navbar', $this->navbar);
    }
}