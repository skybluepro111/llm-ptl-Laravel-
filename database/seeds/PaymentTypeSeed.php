<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Payment_Type;

class PaymentTypeSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = ["Bayaran Pemprosesan / Processing Fee", "Bayaran Perkhidmatan / Services Fee", "Bayaran Lanjutan Masa / Extension Time"
        ];
        foreach ($items as $item) {
            Payment_Type::insert(['name' => $item]);
        }
    }
}
