<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Development_Type;

class DevelopmentTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ["Akses ke Lebuhraya Secara Langsung", "Jalan Melintasi Lebuhraya Tanpa Sambungan", "Saluran Kemudahan Awam Melintasi Lebuhraya", "Papantanda",
            "Lain-lain Jenis Permohonan"];
        foreach ($items as $item) {
            Development_Type::insert(['name' => $item, 'application_category_id' => 1]);
        }
    }
}
