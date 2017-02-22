<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Office;

class RegionalOfficesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = "Pusat Wilayah Utara;U
Pusat Wilayah Tengah;T
Pusat Wilayah Selatan;S
Pusat Wilayah Timur;TR
Pusat Wilayah (Projek);P";
        foreach (preg_split("/((\r?\n)|(\r\n?))/", $csv) as $line) {
            $item = explode(';', $line);
            $data = [
                'name' => $item[0],
                'code' => $item[1]
            ];
            Office::insert($data);
        }
    }
}
