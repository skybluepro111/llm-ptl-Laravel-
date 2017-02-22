<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Application_Category;

class ApplicationCategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ["Pembangunan Tepi Lebuhraya / Side Highway Development", "Paparan Iklan / Display Ads"];
        foreach ($items as $item) {
            Application_Category::insert(['name' => $item]);
        }
    }
}
