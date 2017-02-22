<?php

use Illuminate\Database\Seeder;


class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(ContractorCategorySeed::class);
        $this->call(UsersTableSeeder::class);
        $this->call(RolesSeed::class);
        $this->call(ResponsibilitiesTableSeeder::class);
        $this->call(ConcessSeed::class);
        $this->call(RegionalOfficesSeed::class);
        $this->call(HighwaysTableSeeder::class);
        $this->call(ZonesSeed::class);
        $this->call(AuthoritySeed::class);
        $this->call(PaymentTypeSeed::class);
        $this->call(ApplicationCategorySeed::class);
        $this->call(DevelopmentTypeSeed::class);
        $this->call(DevelopmentDetailsSeed::class);
        $this->call(ExtensionTimesSeed::class);
        $this->call(ProcessingFeesSeed::class);
        $this->call(ServicesFeesSeed::class);

//        factory(App\Models\Messages\Message::class, 10)->create();
    }
}
