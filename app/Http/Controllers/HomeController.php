<?php

namespace App\Http\Controllers;

use Auth;
use App\Http\Requests;
use Illuminate\Http\Request;
use View;

class HomeController extends Controller
{
    private $navbar;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        if (Auth::check()) {
            $this->navbar = [
                [
                    'title' => trans('dash.applications.title'),
                    'href' => route('dashboard.index'),
                    'count' => Auth::user()->applications->count(),
                    'icon' => 'zmdi-layers'
                ],
                [
                    'title' => trans('dash.apply.title'),
                    'href' => route('apply.index'),
                    'count' => null,
                    'icon' => 'zmdi-sign-in'
                ]
            ];
            View::share('navbar', $this->navbar);
        }
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');
    }

    public function changeLanguage($lang)
    {
        
    }

    public function document(Request $request, $application_id, $document)
    {
        $fileName = str_replace('pay_', '', $document);
//        dd(storage_path('applications/'.$application_id.'/'.$fileName));
        return response()->file(storage_path("app\\applications\\".$application_id.'\\'.$fileName));
    }
}
