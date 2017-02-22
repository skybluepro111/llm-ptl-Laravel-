<?php

namespace App\Http\Controllers\Internal\BPO;

use App\Events\PW\ProjectAccepted;
use App\Http\Requests;
use App\Http\Controllers\Internal\BUT\BaseController;
use App\Models\Notification;
use App\Models\Project;
use View;

class BPOController extends BaseController
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
                'title' => trans('bpo.application.title'),
                'href' => route('internal.bpo.application.index'),
                'count' => Notification::BPO()->count(),
                'icon' => 'zmdi-layers'
            ],
            [
                'title' => trans('bpo.project.title'),
                'href' => route('internal.bpo.project.index'),
                'count' => Project::BPO()->count(),
                'icon' => 'zmdi-layers'
            ]
        ];
        View::share('navbar', $this->navbar);
    }
}