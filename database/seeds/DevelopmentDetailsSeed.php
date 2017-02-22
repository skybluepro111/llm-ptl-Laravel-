<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Development_Details;

class DevelopmentDetailsSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = "Akses Terus - Stesen Minyak;1
Akses Terus - Perumahan/Komersial/Pembangunan Bercampur;1
Akses Dengan Persimpangan Bertingkat Baru - Perumahan;1
Akses Dengan Persimpangan Bertingkat Baru - Komersial/Pembangunan Bercampur;1
Jambatan;2
Vehicular Box Culvert (VBC);2
Pipe Jacking;3
Overhead Transmission Line;3
Menara Pemancar;3
Menambah Sesalur ke Lurang Sedia Ada / Penanaman Lurang;3
Forward Advance Direction Sign (FADS);4
Advance Direction Sign (ADS);4
Confirmation Sign (CS);4
Overhead Gantry;4
Butterfly Gantry;4
Menggunakan rezab lebuhraya sebagai jalan sementara untuk ke tapak pembangunan (< 3 tahun);5
Meratakan cerun;5";
        foreach (preg_split("/((\r?\n)|(\r\n?))/", $csv) as $line) {
            $item = explode(';', $line);
            $data = [
                'name' => $item[0],
                'development_type_id' => $item[1]
            ];
            Development_Details::insert($data);
        }
    }
}
