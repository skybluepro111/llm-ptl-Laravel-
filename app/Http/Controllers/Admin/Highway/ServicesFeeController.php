<?php

namespace App\Http\Controllers\Admin\Highway;

use App\Http\Requests;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class ServicesFeeController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->setModel('App\Models\Fees\Highway\ServicesFee');
        $this->crud->setEntityNameStrings('services fee', 'services fees');
        $this->crud->setRoute('admin/highway_services_fee');

        $this->crud->setColumns([
            [
                'label' => 'Development Type',
                'type' => 'model_function',
                'function_name' => 'developmentTypeName'
            ],
            [
                'label' => 'Development Detail',
                'type' => 'model_function',
                'function_name' => 'developmentDetailName'
            ],
            [
                'label' => 'Contractor Category',
                'type' => 'model_function',
                'function_name' => 'contractorCategoryName'
            ],
            [
                'name' => 'amount',
                'label' => 'Amount',
                'type' => 'text',
            ]
        ]);

        $this->crud->addFields([
            [
                'label' => "Development Type",
                'type' => 'select2',
                'name' => 'development_type_id',
                'entity' => 'developmentType',
                'attribute' => 'name',
                'model' => "App\Models\Data\Development_Type"
            ],
            [
                'label' => "Development Detail",
                'type' => 'select2',
                'name' => 'development_detail_id',
                'entity' => 'developmentDetail',
                'attribute' => 'name',
                'model' => "App\Models\Data\Development_Details"
            ],
            [
                'label' => "Contractor Category",
                'type' => 'select2',
                'name' => 'contractor_category_id',
                'entity' => 'contractorCategory',
                'attribute' => 'name',
                'model' => "App\Models\Data\Contractor_Category"
            ],
            [
                'label' => 'Amount',
                'type' => 'text',
                'name' => 'amount'
            ]
        ]);
    }

    /**
     * Store a newly created resource in the database.
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        return parent::storeCrud();
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request)
    {
        return parent::updateCrud();
    }
}
