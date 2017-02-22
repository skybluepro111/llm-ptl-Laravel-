<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Development_Type;
use App\Models\Data\Development_Details;

class ProcessingFeesSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = "Akses ke Lebuhraya Secara Langsung;Akses Terus - Stesen Minyak;3000;3000;1500;1500;0
Akses ke Lebuhraya Secara Langsung;Akses Terus - Perumahan/Komersial/Pembangunan Bercampur;3000;3000;1500;1500;0
Akses ke Lebuhraya Secara Langsung;Akses Dengan Persimpangan Bertingkat Baru - Perumahan;3000;3000;1500;1500;0
Akses ke Lebuhraya Secara Langsung;Akses Dengan Persimpangan Bertingkat Baru - Komersial/Pembangunan Bercampur;3000;3000;1500;1500;0
Jalan Melintasi Lebuhraya Tanpa Sambungan;Jambatan;1500;1500;750;750;0
Jalan Melintasi Lebuhraya Tanpa Sambungan;Vehicular Box Culvert (VBC);1500;1500;750;750;0
Saluran Kemudahan Awam Melintasi Lebuhraya;Pipe Jacking;500;500;250;250;0
Saluran Kemudahan Awam Melintasi Lebuhraya;Overhead Transmission Line;500;500;250;250;0
Saluran Kemudahan Awam Melintasi Lebuhraya;Menara Pemancar;5000;5000;2500;2500;0
Papantanda;Forward Advance Direction Sign (FADS);3000;3000;1500;1500;0
Papantanda;Advance Direction Sign (ADS);3000;3000;1500;1500;0
Papantanda;Confirmation Sign (CS);3000;3000;1500;1500;0
Papantanda;Overhead Gantry;3000;3000;1500;1500;0
Papantanda;Butterfly Gantry;3000;3000;1500;1500;0
Lain-lain Jenis Permohonan;Menggunakan rezab lebuhraya sebagai jalan sementara untuk ke tapak pembangunan (< 3 tahun);3000;3000;1500;1500;0
Lain-lain Jenis Permohonan;Meratakan cerun;3000;3000;1500;1500;0";
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
                \App\Models\Fees\Highway\ProcessingFee::insert($data);
            }
        }

        $csv = "Pole - Twinpole;30000;20000;10000
Pole - Minipole;20000;15000;10000
Pole - Others;20000-30000;15000-20000;10000-15000
Freestanding;10000;7000;5000
Gantri - Overall;50000;35000;20000
Gantri - Back Part;5000;3500;2000
Gantri - Others;10000-50000;7000-35000;2000-20000
Parapet;15000;10000;6000
Paparan Kontena;10000;7000;5000
Iklan Elektronik;50000;35000;20000
Lightbox;150;150;150
Pillar Wrap;1400;1400;1400";
        foreach (preg_split("/((\r?\n)|(\r\n?))/", $csv) as $line) {
            $item = explode(';', $line);
            $data = [
                'name' => $item[0],
                'zone_1' => $item[1],
                'zone_2' => $item[2],
                'zone_3' => $item[3]
            ];
            \App\Models\Fees\Ad\ProcessingFee::insert($data);
        }
    }
}
