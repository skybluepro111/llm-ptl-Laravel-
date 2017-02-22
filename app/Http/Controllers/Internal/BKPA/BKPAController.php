<?php

namespace App\Http\Controllers\Internal\BKPA;


use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Models\Notification;

class BKPAController extends Controller
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
                'title' => trans('bkpa.application.title'),
                'href' => route('internal.bkpa.receipt.index'),
                'count' => Notification::BKPA()->count(),
                'icon' => 'zmdi-layers'
            ]
        ];
    }
}