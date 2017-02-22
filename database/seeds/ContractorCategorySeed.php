<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Contractor_Category;

class ContractorCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ["Individual", "3rd party company", "Concessionarie company", "Government Body", "Government Linked Company (GLC)"];
        foreach ($items as $item) {
            Contractor_Category::insert(['name' => $item]);
        }
    }
}
