<?php

namespace App\Http\Controllers\Admin\Ad;

use App\Http\Requests;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class ServicesFeeController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->setModel('App\Models\Fees\Ad\ServicesFee');
        $this->crud->setEntityNameStrings('service fee', 'service fees');
        $this->crud->setRoute('admin/ad_services_fee');
        $this->crud->setColumns([
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
            ],
            [
                'name' => 'amount',
                'label' => 'Amount',
                'type' => 'text',
            ]
        ]);

        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
            ],
            [
                'name' => 'amount',
                'label' => 'Amount',
                'type' => 'text'
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
