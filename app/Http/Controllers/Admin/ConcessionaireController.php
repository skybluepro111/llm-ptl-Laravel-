<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use Illuminate\Http\Request;

class ConcessionaireController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->setModel('App\Models\Data\Concessionaire');
        $this->crud->setEntityNameStrings('concessionaire', 'concessionaires');
        $this->crud->setRoute('admin/concessionaire');

//        $this->crud->addFields([
//            [
//                'name' => 'name',
//                'label' => 'Name',
//                'type' => 'text',
//            ],
//            [
//                'name' => 'address',
//                'label' => 'Address',
//                'type' => 'textarea',
//            ],
//            [
//                'name' => 'city',
//                'label' => 'City',
//                'type' => 'text',
//            ],
//            [
//                'name' => 'postcode',
//                'label' => 'Postcode',
//                'type' => 'text',
//            ],
//            [
//                'name' => 'state',
//                'label' => 'State',
//                'type' => 'text',
//            ],
//            [
//                'name' => 'country',
//                'label' => 'Country',
//                'type' => 'text',
//            ],
//            [
//                'name' => 'phone',
//                'label' => 'Phone',
//                'type' => 'text',
//            ],
//        ]);
        $this->crud->setFromDb();
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
