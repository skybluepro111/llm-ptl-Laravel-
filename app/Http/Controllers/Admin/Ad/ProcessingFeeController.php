<?php

namespace App\Http\Controllers\Admin\Ad;

use App\Http\Requests;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class ProcessingFeeController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->setModel('App\Models\Fees\Ad\ProcessingFee');
        $this->crud->setEntityNameStrings('processing fee', 'processing fees');
        $this->crud->setRoute('admin/ad_processing_fee');
        $this->crud->setColumns([
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
            ],
            [
                'name' => 'zone_1',
                'label' => 'Zone 1',
                'type' => 'text',
            ],
            [
                'name' => 'zone_2',
                'label' => 'Zone 2',
                'type' => 'text',
            ],
            [
                'name' => 'zone_3',
                'label' => 'Zone 3',
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
                'name' => 'zone_1',
                'label' => 'Zone 1',
                'type' => 'text'
            ],
            [
                'name' => 'zone_2',
                'label' => 'Zone 2',
                'type' => 'text'
            ],
            [
                'name' => 'zone_3',
                'label' => 'Zone 3',
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
