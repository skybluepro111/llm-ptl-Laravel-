<?php

namespace App\Http\Controllers\Admin;

use App\Http\Requests;
use Backpack\CRUD\app\Http\Controllers\CrudController;
use App\Http\Requests\Admin\UserRequest;

class UserController extends CrudController
{
    public function __construct()
    {
        parent::__construct();

        $this->crud->setModel(config('backpack.permissionmanager.user_model'));
        $this->crud->setEntityNameStrings('user', 'users');
        $this->crud->setRoute('admin/user');
        $this->crud->setColumns([
            [
                'name'  => 'name',
                'label' => 'Name',
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => 'Email',
                'type'  => 'email',
            ],
        ]);


        $this->crud->addColumn([ // n-n relationship (with pivot table)
            'label'     => 'Roles', // Table column heading
            'type'      => 'select_multiple',
            'name'      => 'roles', // the method that defines the relationship in your Model
            'entity'    => 'roles', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "Backpack\PermissionManager\app\Models\Roles", // foreign key model
        ]);

        $this->crud->addColumn([ // n-n relationship (with pivot table)
            'label'     => 'Extra Permissions', // Table column heading
            'type'      => 'select_multiple',
            'name'      => 'permissions', // the method that defines the relationship in your Model
            'entity'    => 'permissions', // the method that defines the relationship in your Model
            'attribute' => 'name', // foreign key attribute that is shown to user
            'model'     => "Backpack\PermissionManager\app\Models\Permission", // foreign key model
        ]);

        $this->crud->addFields([
            [
                'name'  => 'name',
                'label' => 'Name',
                'type'  => 'text',
            ],
            [
                'name'  => 'email',
                'label' => 'Email',
                'type'  => 'email',
            ],
            [
                'name'  => 'password',
                'label' => 'Password',
                'type'  => 'password',
            ],
            [
                'name'  => 'password_confirmation',
                'label' => 'Password Confirmation',
                'type'  => 'password',
            ],
            [
                'name' => 'activated', // the name of the db column
                'label' => 'Activation', // the input label
                'type' => 'select_from_array',
                'options' => [
                    0 => "Not activated",
                    1 => "Activated"
                ],
                'allows_null' => false
            ],
            [
                'name' => 'phone',
                'label' => 'Phone',
                'type' => 'text',
            ],
            [  // Select2
                'label' => "Contractor Category",
                'type' => 'select2',
                'name' => 'contractor_category_id', // the db column for the foreign key
                'entity' => 'contractorCategory', // the method that defines the relationship in your Model
                'attribute' => 'name', // foreign key attribute that is shown to user
                'model' => "App\Models\Data\Contractor_Category" // foreign key model
            ],
            [ // select_from_array
                'name' => 'roles',
                'label' => 'Role',
                'field_unique_name' => 'user_role_permission',
                'type' => 'multi-level',
                'subfields'         => [
                    'primary' => [
                        'label'            => 'Roles',
                        'name'             => 'roles', // the method that defines the relationship in your Model
                        'entity'           => 'roles', // the method that defines the relationship in your Model
                        'entity_secondary' => 'permissions', // the method that defines the relationship in your Model
                        'attribute'        => 'name', // foreign key attribute that is shown to user
                        'model'            => "Backpack\PermissionManager\app\Models\Role", // foreign key model
                        'pivot'            => true, // on create&update, do you need to add/delete pivot table entries?]
                        'number_columns'   => 4, //can be 1,2,3,4,6
                    ],
                    'secondary' => [
                        'label'          => 'Permission',
                        'name'           => 'permissions', // the method that defines the relationship in your Model
                        'entity'         => 'permissions', // the method that defines the relationship in your Model
                        'entity_primary' => 'roles', // the method that defines the relationship in your Model
                        'attribute'      => 'name', // foreign key attribute that is shown to user
                        'model'          => "Backpack\PermissionManager\app\Models\Permission", // foreign key model
                        'pivot'          => true, // on create&update, do you need to add/delete pivot table entries?]
                        'number_columns' => 4, //can be 1,2,3,4,6
                    ]
                ],
            ],
//            [
//                // two interconnected entities
//                'label'             => 'User Role Permissions',
//                'field_unique_name' => 'user_role_permission',
//                'type'              => 'checklist_dependency',
//                'name'              => 'roles_and_permissions', // the methods that defines the relationship in your Model
//                'subfields'         => [
//                    'primary' => [
//                        'label'            => 'Roles',
//                        'name'             => 'roles', // the method that defines the relationship in your Model
//                        'entity'           => 'roles', // the method that defines the relationship in your Model
//                        'entity_secondary' => 'permissions', // the method that defines the relationship in your Model
//                        'attribute'        => 'name', // foreign key attribute that is shown to user
//                        'model'            => "Backpack\PermissionManager\app\Models\Role", // foreign key model
//                        'pivot'            => true, // on create&update, do you need to add/delete pivot table entries?]
//                        'number_columns'   => 3, //can be 1,2,3,4,6
//                    ],
//                    'secondary' => [
//                        'label'          => 'Permission',
//                        'name'           => 'permissions', // the method that defines the relationship in your Model
//                        'entity'         => 'permissions', // the method that defines the relationship in your Model
//                        'entity_primary' => 'roles', // the method that defines the relationship in your Model
//                        'attribute'      => 'name', // foreign key attribute that is shown to user
//                        'model'          => "Backpack\PermissionManager\app\Models\Permission", // foreign key model
//                        'pivot'          => true, // on create&update, do you need to add/delete pivot table entries?]
//                        'number_columns' => 3, //can be 1,2,3,4,6
//                    ]
//                ],
//            ],
        ]);
    }

    /**
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(UserRequest $request)
    {
        $this->crud->hasAccessOrFail('create');
        if ($request->input('password'))
        {
            $item = $this->crud->create(\Request::except(['redirect_after_save']));

            // now bcrypt the password
            $item->password = bcrypt($request->input('password'));
            $item->save();
        }
        else
        {
            $item = $this->crud->create(\Request::except(['redirect_after_save', 'password']));
        }
        \Alert::success(trans('backpack::crud.insert_success'))->flash();
        switch (\Request::input('redirect_after_save')) {
            case 'current_item_edit':
                return \Redirect::to($this->crud->route.'/'.$item->id.'/edit');

            default:
                return \Redirect::to(\Request::input('redirect_after_save'));
        }
    }

    /**
     * @param UserRequest $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(UserRequest $request)
    {
        $this->crud->hasAccessOrFail('update');
        $dataToUpdate = \Request::except(['redirect_after_save', 'password']);
        if ($request->input('password')) {
            $dataToUpdate['password'] = bcrypt($request->input('password'));
        }
        $this->crud->update(\Request::get('id'), $dataToUpdate);
        \Alert::success(trans('backpack::crud.update_success'))->flash();
        return \Redirect::to($this->crud->route);
    }
}
