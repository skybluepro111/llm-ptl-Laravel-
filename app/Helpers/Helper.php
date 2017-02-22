<?php
namespace App\Helpers;

use App\Models\Data\Contractor_Category;
use League\Fractal;
use App\Transformers\DevelopmentDetailsTransformer;
use Auth;
use App\Models\Application;

class Helper
{
    /**
     * Generate
     * @param $application_id
     * @return string
     */
    public static function generatePath($application_id)
    {
        return storage_path('app/applications/' . $application_id);
    }

    /**
     * Call transform class
     * @param $input
     * @param $transformer
     * @param $options
     * @return mixed
     */
    public static function transform($input, $transformer, $options = null)
    {
        $fractal = new Fractal\Manager();
        $resource = new Fractal\Resource\Collection($input, new $transformer, $options);
        return collect(current($fractal->createData($resource)->toArray()));
    }

    /**
     * Get redirect url after login
     * @param $roleName
     * @return string|\Exception
     */
    public static function getRedirectUrlAfterLogin($roleName)
    {
        $redirects = [
            'admin' => url('admin'),
            'applicant' => route('dashboard.index'),
            'bkpa' => route('internal.bkpa.inbox.index'),
            'bpo' => route('internal.bpo.inbox.index'),
            'but' => route('internal.but.inbox.index'),
            'pw' => route('internal.pw.inbox.index')

        ];
        try {
            return $redirects[$roleName];
        } catch (\Exception $e) {
            return $e;
        }
    }

    /**
     * @return mixed
     */
    public static function getUserApplications()
    {
        $user = Auth::user();
        $applications = Application::whereUserId($user->id);
        return $applications;
    }

    public static function getDepartmentEmails($type)
    {
        $emails = ['dmitry.rodionov@gmail.com'];
        switch ($type) {
            case 'bkpa':

                break;
            case 'bpo':

                break;
            case 'pw':

                break;
        }
        return $emails;
    }

    public static function getDepartmentByApplicationType($type)
    {

        switch ($type) {
            case 'highway':
                $department = 'bpo';
                break;
            case 'billboard':
                $department = 'but';
                break;
        }
        return $department;
    }

    public static function getContractorCategoryByWord($word)
    {
        try {
            $contractor = Contractor_Category::where('name', 'like', '%' . $word . '%')
                ->orWhere('name', 'like', '%' . ucfirst($word) . '%')->first();
            return $contractor->id;
        } catch (\Exception $e) {

        }

    }

    public static function priceFormat($value){
        return 'RM '. number_format($value, 2);
    }

    public static function dateFormat($value, $format = 'd-m-Y'){
        if(empty($value)){
            return $value;
        }
        return date($format, strtotime($value));
    }

    public static function documentTitle($title) {
        return str_replace('_', ' ', title_case($title));
    }
}
