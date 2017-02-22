<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class ZoneController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->setModel('App\Models\Data\Zone');
        $this->crud->setEntityNameStrings('zone', 'zones');
        $this->crud->setRoute('admin/zone');
        $this->crud->setColumns([
            [
                'name' => 'name',
                'label' => 'Name',
                'type' => 'text',
            ],
            [
                'name' => 'code',
                'label' => 'Code',
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
                'name' => 'code',
                'label' => 'Code',
                'type' => 'text',
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
