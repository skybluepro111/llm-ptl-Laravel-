<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class DevelopmentDetailsController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->setModel('App\Models\Data\Development_Details');
        $this->crud->setEntityNameStrings('development detail', 'development details');
        $this->crud->setRoute('admin/development_details');
        $this->crud->setColumns([
            [
                'name' => 'name',
                'label' => 'Name',
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
                'label' => "Development Type",
                'type' => 'select2',
                'name' => 'development_type_id',
                'entity' => 'development_type',
                'attribute' => 'name',
                'model' => "App\Models\Data\Development_Type"
            ]

        ]);
    }

    /**
     * Store a newly created resource in the database.
     *
     * @param StoreRequest $request - type injection used for validation using Requests
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        return parent::storeCrud();
    }

    public function update(Request $request)
    {
        return parent::updateCrud();
    }
}
