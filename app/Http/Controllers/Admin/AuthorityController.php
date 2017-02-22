<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class AuthorityController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->setModel('App\Models\Data\Authority');
        $this->crud->setEntityNameStrings('local authority', 'local authorities');
        $this->crud->setRoute('admin/local_authority');
        $this->crud->setColumns([
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
            ],
            [
                'name' => 'short',
                'label' => 'Shortform',
                'type' => 'text'
            ]
        ]);

        $this->crud->addFields([
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
            ],
            [
                'name' => 'short',
                'label' => 'Shortform',
                'type' => 'text'
            ],
            [
                'label' => "Zone",
                'type' => 'select2',
                'name' => 'zone_id',
                'entity' => 'zone',
                'attribute' => 'name',
                'model' => "App\Models\Data\Zone"
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
