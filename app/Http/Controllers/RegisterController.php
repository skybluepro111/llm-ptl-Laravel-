<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;
use App\Http\Requests;
use Hash;
use App\Http\Requests\RegisterRequest;
use App\Models\User;
use App\Models\UserData;
use App\Models\Data\Contractor_Category;
use App\Models\Data\Concessionaire;
use App\Services\ActivationService;
use App\Helpers\Helper;

class RegisterController extends Controller
{
    /**
     * Steps for progress bar
     * @var array
     */
    public $steps;

    /**
     * Type of register
     * @var string
     */
    public $type;

    /**
     * @var User
     */
    public $user;

    protected $activationService;

    /**
     * RegisterController constructor.
     * @param Request $request
     * @param ActivationService $activationService
     */
    public function __construct(Request $request, ActivationService $activationService)
    {
        $this->steps = [
            'title' => trans('register.steps.title'),
            'steps' => [
                trans('register.steps.first'),
                trans('register.steps.second'),
                trans('register.steps.third')
            ],
            'active' => 0
        ];
        $this->user = new User();
        $this->activationService = $activationService;
        View::share('user', $this->user);
        View::share('type', $request->segment(2));
        View::share('steps', $this->steps);
    }

    /**
     * First page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('register.index');
    }

    /**
     * @param $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function second($type)
    {
        if ($type == 'company') {
            $concessionaires = Concessionaire::all();
        }

        $contractor_category_id = Helper::getContractorCategoryByWord($type);

        $contractors = trans('register.contractors.' . $type);

        if (!is_array($contractors)) {
            $contractors = Contractor_Category::lists('name', 'id');
        }

        return view('register.second', compact(
            'contractors',
            'concessionaires',
            'type',
            'contractor_category_id'
        ));
    }

    /**
     * Store company user
     * @param RegisterRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function post(RegisterRequest $request)
    {
        $userFields = ['name', 'email', 'phone'];

        $data = $request->only($userFields);
        $data['password'] = Hash::make($request->get('password'));
        $data['contractor_category_id'] = $this->getTypeId($request->get('type'));
        $user = new User();
        $user->fill($data);
        $user->save();

        $user->assignRole('applicant');

        $user_data = $request->all();
        //: Reset attribute name (users && user_data same column name)
        $user_data['name'] = $user_data['company_name'];
        unset($user_data['company_name']);
        $user_data['user_id'] = $user->id;
        $details = new UserData();
        $details->fill($user_data);
        $details->save();

        $this->activationService->sendActivationMail($user);

        return redirect(route('register.finish'))->with('email', $request->get('email'));
    }

    /**
     * Show finish page
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function finish()
    {
        $email = session('email');
        return view('register.finish', compact('email'));
    }

    protected function getTypeId($value)
    {
        $items = [
            'company' => 1,
            'individual' => 2,
            'concessionarie' => 3,
            'government' => 4,
            'glc' => 5
        ];
        return $items[$value];
    }

}