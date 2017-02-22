<?php

use Illuminate\Database\Seeder;

class ResponsibilitiesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $responsibilities = [
            2 => ['submit_application', 'updating_application', 'final_payment', 'accept_permit'],
            7 => ['payment_verification'],
            12 => ['application_acceptance', 'generate_work_lettter'],
            31 => ['technical_review', 'issue_permit', 'work_surveilance'],
            36 => ['approval_review']
        ];
        foreach ($responsibilities as $role_id => $role) {
            foreach ($role as $responsibility) {
                DB::table('responsibilities')->insert([
                    'role_id' => $role_id,
                    'name' => $responsibility,
                    'description' => 'Role'
                ]);
            }
        }
    }
}
