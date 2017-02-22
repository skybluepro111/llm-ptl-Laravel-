<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class HighwayController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->setModel('App\Models\Data\Highway');
        $this->crud->setEntityNameStrings('highway', 'highways');
        $this->crud->setRoute('admin/highway');
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
            ],
            [
                'name' => 'short',
                'label' => 'Short',
                'type' => 'text',
            ],
            [
                'name' => 'lng',
                'label' => 'Longitude',
                'type' => 'text',
            ],
            [
                'name' => 'lat',
                'label' => 'Latitude',
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
            ],
            [
                'name' => 'short',
                'label' => 'Short Form',
                'type' => 'text',
            ],
            [
                'name' => 'lng',
                'label' => 'Longitude',
                'type' => 'text',
            ],
            [
                'name' => 'lat',
                'label' => 'Latitude',
                'type' => 'text',
            ],
            [
                'label' => "Regional Office",
                'type' => 'select2',
                'name' => 'office_id',
                'entity' => 'office',
                'attribute' => 'name',
                'model' => "App\Models\Data\Office"
            ],
            [
                'label' => "Concessionaire",
                'type' => 'select2',
                'name' => 'concessionaire_id',
                'entity' => 'concessionaire',
                'attribute' => 'name',
                'model' => "App\Models\Data\Concessionaire"
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
        $this->crud->hasAccessOrFail('create');

        $item = $this->crud->create(\Request::except(['redirect_after_save', 'password']));

        // show a success message
        \Alert::success(trans('backpack::crud.insert_success'))->flash();

        // redirect the user where he chose to be redirected
        switch (\Request::input('redirect_after_save')) {
            case 'current_item_edit':
                return \Redirect::to($this->crud->route . '/' . $item->id . '/edit');

            default:
                return \Redirect::to(\Request::input('redirect_after_save'));
        }
    }

    public function update(Request $request)
    {
        //encrypt password and set it to request
        $this->crud->hasAccessOrFail('update');

        $dataToUpdate = \Request::except(['redirect_after_save', 'password']);

        // update the row in the db
        $this->crud->update(\Request::get('id'), $dataToUpdate);

        // show a success message
        \Alert::success(trans('backpack::crud.update_success'))->flash();

        return \Redirect::to($this->crud->route);
    }
}
