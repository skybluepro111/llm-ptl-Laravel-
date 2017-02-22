<?php

namespace App\Http\Controllers;


use Auth;
use Event;
use File;
use View;
use Illuminate\Http\Request;
use App\Events\Apply\ApplicationWasCreated;
use App\Events\Apply\PaymentWasCreated;
use App\Models\Application;
use App\Models\Payment;
use App\Models\Data\Highway;
use App\Models\Data\Zone;
use App\Models\Data\Authority;
use App\Models\Data\Development_Type;
use App\Models\Data\Development_Details;
use App\Models\Fees\Highway\ProcessingFee;
use App\Models\User;
use App\Helpers\Helper;
use App\Http\Requests;
use App\Http\Requests\Apply\SecondRequest;
use App\Http\Requests\Apply\ThirdRequest;
use App\Transformers\Apply\HighwayTransformer;


class ApplicationController extends Controller
{
    /**
     * @var User $user
     */
    private $user;

    /**
     * @var array
     */
    public $steps;

    /**
     * @var array
     */
    private $navbar;

    /**
     * ApplicationController constructor.
     * return @void
     */
    public function __construct()
    {
        $this->steps = [
            'title' => trans('apply.steps.title'),
            'steps' => [
                trans('apply.steps.first'),
                trans('apply.steps.second'),
                trans('apply.steps.third'),
                trans('apply.steps.fourth')
            ],
            'active' => 0
        ];
        View::share('steps', $this->steps);

        $this->user = Auth::user();

        $this->navbar = [
            [
                'title' => trans('dash.applications.title'),
                'href' => route('dashboard.index'),
                'count' => $this->user->applications->count(),
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

    /**
     * First step
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('apply.index');
    }

    /**
     * Second step
     * @param $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function second($type)
    {
        $steps = $this->steps;
        $steps['active'] = 1;
        $application = new Application();
        $highways = Helper::transform(Highway::all(),
            HighwayTransformer::class);
        $zones = Zone::lists('name', 'id');
        $local_authorities = Authority::whereZoneId(1)->lists('name', 'id');
        return view('apply.second_' . $type,
            compact('steps', 'type', 'application', 'highways', 'zones', 'local_authorities')
            )->with('type', $type);
    }

    /**
     * Store data from second step
     * @param SecondRequest $request
     * @param $type
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function secondStore(SecondRequest $request, $type)
    {
        $application = new Application();
        $data = $request->all();
        $data['user_id'] = Auth::user()->id;
        $data['status'] = 'pending';
        $data['slug'] = $this->generateSlug();
        $data['coordinates'] = json_encode(['lat' => $request->get('lat'), 'lng' => $request->get('lng')]);
        $data['type'] = $request->segment(2);
        $application->fill($data);
        $application->save();
        session(['application' => $application->id]);

        // Files upload
        $files = [
            'design_concept', 'location_plan', 'image_location','review_letter', 'structure'
        ];
        if(array_key_exists('ls_file_append', $data) && $data['ls_file_append'] !=''){
            $files = array_merge($files, explode(',', $data['ls_file_append']));
        }
        $path = Helper::generatePath($application->id);
        if (!File::exists($path)) {
            File::makeDirectory($path);
        }
        $fileNames = collect([]);
        foreach ($files as $fileName) {
            if ($request->hasFile($fileName)) {
                $file = $request->file($fileName);
                $save_file = $fileName.'_'.time().'.'.$file->extension();
                $file->move($path, $save_file);
                $fileNames->put($fileName, $save_file);
            }
        }
        $application->documents = $fileNames->toJson();
        $application->update();

        Event::fire(new ApplicationWasCreated($application));
        return redirect(route('apply.third', ['type' => $type]));
    }

    /**
     * Third step
     * @param Request $request
     * @param $type
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function third(Request $request, $type)
    {
        $steps = $this->steps;
        $steps['active'] = 2;
        $application = $this->getApplication();
        $payment = new Payment();
        $development_types = Development_Type::lists('name', 'id');
        switch ($application->type) {
            case 'highway':
                $processing_fees = ProcessingFee::whereContractorCategoryId($this->user->contractor_category_id)
                    ->with('developmentDetail')->get();
                $processing_fees = Helper::transform($processing_fees,
                    \App\Transformers\Apply\HighwayProcessingFeeTransformer::class);
                $processing_fees = $processing_fees->lists('name', 'id');

                //: Update app id
                $application->app_id = 'PTL / '.date('Y').' / '.$application->id;
                $application->save();
                break;
            case 'billboard':
                $zone_id = $application->authority->zone->id;
                $processing_fees = \App\Models\Fees\Ad\ServicesFee::all();
                $processing_fees = Helper::transform($processing_fees,
                    \App\Transformers\BillboardProcessingFeeTransformer::class);
                $processing_fees = $processing_fees->lists('name', 'id');

                //: Update app id
                $application->app_id = 'PI / '.date('Y').' / '.$application->id;
                $application->save();
                break;
        }
        return view('apply.third',
            compact('steps', 'type', 'application',
                'payment', 'development_types',
                'processing_fees'));
    }

    /**
     * @param ThirdRequest $request
     * @param $type
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function thirdStore(ThirdRequest $request, $type)
    {
        $application_id = session('application');
        $data = $request->all();
        //TODO quantity modal
        $data['application_id'] = $application_id;
        $payment = new Payment();
        $payment->fill($data);
        $payment->save();

        $application = $this->getApplication();

        if ($request->hasFile('payment_slip')):
            $path = Helper::generatePath($application->id);
            $file = $request->file('payment_slip');
            $save_file = 'payment_slip_'.time().'.'.$file->extension();
            $file->move($path, $save_file);

            $documents = $application->documents;
            $documents->pay = 'pay_' . $save_file;
            $application->documents = json_encode($documents);
            $application->update();
        endif;
        Event::fire(new PaymentWasCreated($application));
        return redirect(route('apply.fourth', ['type' => $type, 'application_id' => $application->id]));
    }

    /**
     * @param string $type
     * @param Request $request
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function fourth($type, Request $request)
    {

        $application_id = $request->get('application_id');

        $steps = $this->steps;
        $steps['active'] = 2;
        $application = new Application();

        $payment = Payment::where('application_id', $application_id)->first();
        $fee_name = $payment->processing_fee->name;
        switch ($type) {
            case 'highway':
                $amount = $payment->processing_fee->amount;
                break;
            case 'billboard':
                $zone = 'zone_' . $payment->application->authority->zone_id;
                $amount = $payment->processing_fee->amount;
                break;
        }
        return view('apply.fourth', compact('steps',
            'application', 'type', 'payment',
            'fee_name', 'amount'
        ));
    }

    public function fourthStore($type)
    {
        return redirect(route('apply.fifth', ['type' => $type]));
    }

    public function fifth()
    {
        $steps = $this->steps;
        $steps['active'] = 3;
        return view('apply.fifth', compact('steps'));
    }

    /**
     * Generate slug
     * TODO how to generate slug?
     * @return string
     */
    private function generateSlug()
    {
        return 'BYR2013052';
    }

    /**
     * Get application
     * @return \Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model
     */
    private function getApplication()
    {
        $application_id = session('application');
        return Application::findOrFail($application_id);
    }

    /**
     * Get authorities for given zone
     * @param $id
     * @return array|\Illuminate\Support\Collection
     */
    public function getLocalAuthorities($id)
    {
        return Authority::whereZoneId($id)->lists('name', 'id');
    }

    /**
     * Get processing fees for given development type
     * @param $development_type_id
     * @return array|\Illuminate\Support\Collection
     */
    public function getProcessingFees($development_type_id)
    {
        $application = $this->getApplication();
        $contractor_category_id = $this->user->contractor_category_id;
        $fees = Development_Details::fees(
            $development_type_id,
            $application->type,
            $contractor_category_id);
        $fees = Helper::transform(
            $fees,
            \App\Transformers\DevelopmentDetailsTransformer::class);
        return $fees->lists('name', 'id');
    }
}
