<?php

use Illuminate\Database\Seeder;
use App\Models\Fees\Highway\ExtensionTime;
use App\Models\Data\Development_Type;
use App\Models\Data\Development_Details;

class ExtensionTimesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = "Akses ke Lebuhraya Secara Langsung;Akses Terus - Perumahan/Komersial/Pembangunan Bercampur;3000
Akses ke Lebuhraya Secara Langsung;Akses Dengan Persimpangan Bertingkat Baru - Perumahan;3000
Akses ke Lebuhraya Secara Langsung;Akses Dengan Persimpangan Bertingkat Baru - Komersial/Pembangunan Bercampur;3000
Jalan Melintasi Lebuhraya Tanpa Sambungan;Jambatan;2000
Jalan Melintasi Lebuhraya Tanpa Sambungan;Vehicular Box Culvert (VBC);2000
Saluran Kemudahan Awam Melintasi Lebuhraya;Pipe Jacking;1500
Saluran Kemudahan Awam Melintasi Lebuhraya;Overhead Transmission Line;1500
Saluran Kemudahan Awam Melintasi Lebuhraya;Menara Pemancar;1500
Papantanda;Forward Advance Direction Sign (FADS);5000
Papantanda;Advance Direction Sign (ADS);5000
Papantanda;Confirmation Sign (CS);5000
Papantanda;Overhead Gantry;5000
Papantanda;Butterfly Gantry;5000
Lain-lain Jenis Permohonan;Menggunakan rezab lebuhraya sebagai jalan sementara untuk ke tapak pembangunan (< 3 tahun);5000
Lain-lain Jenis Permohonan;Meratakan cerun;5000";
        foreach (preg_split("/((\r?\n)|(\r\n?))/", $csv) as $line) {
            $item = explode(';', $line);
            $dev_type = Development_Type::whereName($item[0], 'like')->first();
            $dev_detail = Development_Details::whereName($item[1], 'like')->first();
            $amount = $item[2];
            $data = [
                'development_detail_id' => $dev_detail->id,
                'development_type_id' => $dev_type->id,
                'amount' => $amount
            ];
            ExtensionTime::insert($data);
        }
    }
}
