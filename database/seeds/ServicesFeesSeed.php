<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Development_Type;
use App\Models\Data\Development_Details;

class ServicesFeesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = "Akses ke Lebuhraya Secara Langsung;Akses Terus - Stesen Minyak;300000;300000;300000;100000;0
Akses ke Lebuhraya Secara Langsung;Akses Terus - Perumahan/Komersial/Pembangunan Bercampur;100000;100000;100000;30000;0
Akses ke Lebuhraya Secara Langsung;Akses Dengan Persimpangan Bertingkat Baru - Perumahan;500000;500000;500000;50000;0
Akses ke Lebuhraya Secara Langsung;Akses Dengan Persimpangan Bertingkat Baru - Komersial/Pembangunan Bercampur;500000;500000;500000;50000;0
Jalan Melintasi Lebuhraya Tanpa Sambungan;Jambatan;20000;20000;20000;10000;0
Jalan Melintasi Lebuhraya Tanpa Sambungan;Vehicular Box Culvert (VBC);10000;10000;10000;5000;0
Saluran Kemudahan Awam Melintasi Lebuhraya;Pipe Jacking;5000;5000;5000;0;0
Saluran Kemudahan Awam Melintasi Lebuhraya;Overhead Transmission Line;5000;5000;5000;0;0
Saluran Kemudahan Awam Melintasi Lebuhraya;Menara Pemancar;20000;20000;20000;0;0
Papantanda;Forward Advance Direction Sign (FADS);50000;50000;50000;25000;0
Papantanda;Advance Direction Sign (ADS);50000;50000;50000;25000;0
Papantanda;Confirmation Sign (CS);50000;50000;50000;25000;0
Papantanda;Overhead Gantry;50000;50000;50000;25000;0
Papantanda;Butterfly Gantry;50000;50000;50000;25000;0
Lain-lain Jenis Permohonan;Menggunakan rezab lebuhraya sebagai jalan sementara untuk ke tapak pembangunan (< 3 tahun);50000;50000;50000;25000;0
Lain-lain Jenis Permohonan;Meratakan cerun;5000;5000;5000;2500;0";
        foreach (preg_split("/((\r?\n)|(\r\n?))/", $csv) as $line) {
            $item = explode(';', $line);
            $dev_type = Development_Type::whereName($item[0], 'like')->first();
            $dev_detail = Development_Details::whereName($item[1], 'like')->first();
            for ($i = 1; $i < 5; $i++) {
                $amount = $item[$i + 1];
                $data = [
                    'development_detail_id' => $dev_detail->id,
                    'development_type_id' => $dev_type->id,
                    'amount' => $amount,
                    'contractor_category_id' => $i
                ];
                \App\Models\Fees\Highway\ServicesFee::insert($data);
            }
        }

        $csv = "Pole;1000
Freestanding;500
Gantri;1000
Parapet;500
Paparan Kontena;500
Iklan Elektronik;500
Lightbox;20
Pillar Wrap;300";
        foreach (preg_split("/((\r?\n)|(\r\n?))/", $csv) as $line) {
            $item = explode(';', $line);
            $data = [
                'name' => $item[0],
                'amount' => $item[1]
            ];
            \App\Models\Fees\Ad\ServicesFee::insert($data);
        }
    }
}
