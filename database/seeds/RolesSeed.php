<?php

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\User;


class RolesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'applicant' => [
                'company',
                'individual',
                'govt_agency',
                'glc'
            ],
            'bkpa' => [
                'director',
                'asst_director',
                'accountant',
                'asst_accountant'
            ],
            'bpo' => [
                'director',
                'asst_director',
                'engineer',
                'technician'
            ],
            'but' => [
                'director',
                'asst_director',
                'admin_officer',
                'asst_admin_officer'
            ],
            'concessionaries' => [
                'director',
                'asst_director',
                'engineer',
                'technician'
            ],
            'management' => [
                'director_general',
                'asst_director_biz',
                'asst_director_dev'
            ],
            'pw' => [
                'director',
                'asst_director',
                'engineer',
                'technician'
            ],
            'kkr' => []
        ];
        foreach($roles as $root => $subRoles){
            Role::create(['name' => $root]);
            foreach($subRoles as $subRole) {
                Role::create(['name' => $root.'__'.$subRole]);
            }
        }

        $permissions = [
            'access' => [
                'bkpa',
                'bpo',
                'but',
                'pw',
                'management'
            ]
        ];

        // access bpo
        // access bkpa
        // access pw
        foreach($permissions as $groupName => $group) {
            foreach($group as $permission) {
                $permissionName = $groupName . ' ' . $permission;
                Permission::create(['name' => $permissionName]);
                $role = Role::whereName($permission)->first();
                $role->givePermissionTo($permissionName);
                if(is_array($roles[$permission])) {
                    foreach($roles[$permission] as $roleName) {
                        $role = Role::whereName($permission.'__'.$roleName)->first();
                        $role->givePermissionTo($permissionName);
                    }
                }
            }
        }

        // Create user

        $users = [
            [
                'name' => 'ePTL System',
                'email' => 'eptl@llm.gov.my',
                'password' => 'secret',
                'group' => 'admin'
            ],
            [
                'name' => 'Dmitry Rodionov',
                'email' => 'dmitry.rodionov@gmail.com',
                'password' => 'secret',
                'group' => 'admin'
            ],
            [
                'name' => 'Luqman Rom',
                'email' => 'luqmanrom@gmail.com',
                'password' => 'secret',
                'group' => 'admin'

            ],
            [
                'name' => 'Safwan',
                'email' => 'safwan@gmail.com',
                'password' => '123456',
                'group' => 'admin'

            ],
            [
                'name' => 'BKPA',
                'email' => 'bkpa@llm.gov.my',
                'password' => '123456',
                'group' => 'bkpa'

            ],
            [
                'name' => 'Bhgn Pengurusan Tanah',
                'email' => 'but@llm.gov.my',
                'password' => '123456',
                'group' => 'but'

            ],
            [
                'name' => 'Bhgn Pengurusan Operasi',
                'email' => 'bpo@llm.gov.my',
                'password' => '123456',
                'group' => 'bpo'

            ],
            [
                'name' => 'Pejabat Wilayah Tengah',
                'email' => 'pwt@llm.gov.my',
                'password' => '123456',
                'group' => 'pw'

            ],
            [
                'name' => 'Ahmad Sani Othman',
                'email' => 'sani@konsesi.com',
                'password' => '123456',
                'group' => 'concessionaries'

            ],
            [
                'name' => 'Ir. Abdullah Bin Hashim',
                'email' => 'abdullah@llm.gov.my',
                'password' => '123456',
                'group' => 'management'

            ],
        ];

        $individualDetails = [
            'name' => 'My Name',
            'registration_number' => '44983-14972',
            'address' => 'My individual address',
            'phone_office' => '+873636283947464',
            'fax_office' => '+87393225447464'
        ];

        foreach ($users as $user) {
            $newUser = new User();

            $newUser->name = $user['name'];
            $newUser->email = $user['email'];
            $newUser->password = bcrypt($user['password']);
            $newUser->contractor_category_id = 2;
            $newUser->phone = '0341084555';
            $newUser->activated = true;

            $newUser->save();

            $details = new \App\Models\UserData();
            $details->user_id = $newUser->id;
            $details->name = $individualDetails['name'];
            $details->registration_number = $individualDetails['registration_number'];
            $details->address = $individualDetails['address'];
            $details->phone_office = $individualDetails['phone_office'];
            $details->fax_office = $individualDetails['fax_office'];
            $details->save();

            $newUser->assignRole($user['group']);

        }

    }
}
