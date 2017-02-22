<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Zone;

class ZonesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = ['Zon 1', 'Zon 2', 'Zon 3'];
        foreach ($csv as $item) {
            $data = [
                'name' => $item
            ];
            Zone::insert($data);
        }
    }
}
