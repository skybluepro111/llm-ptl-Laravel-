<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Concessionaire;
use App\Models\Data\Highway;

class HighwaysTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = $string = "E1;Lebuhraya Utara-Selatan (Persimpangan Bukit Lanjan - Plaza Tol Bukit Kayu Hitam);PLUS (U);Projek Lebuhraya Usahasama Berhad (PLUS Berhad)
E2;Lebuhraya Utara-Selatan (Plaza Tol Sg. Besi - Persimpangan Pandan);PLUS (S);Projek Lebuhraya Usahasama Berhad (PLUS Berhad)
E1;Lebuhraya Baru Lembah Klang (Persimpangan Bukit Raja - Plaza Tol Jalan Duta);NKVE;Projek Lebuhraya Usahasama Berhad (PLUS Berhad)
E1;Lebuhraya Persekutuan II (Persimpangan Lapangan Terbang Subang - Persimpangan Berkely);FHR II;Projek Lebuhraya Usahasama Berhad (PLUS Berhad)
E29;Lebuhraya Seremban-Port Dickson;SPDH;Projek Lebuhraya Usahasama Berhad (PLUS Berhad)
E15;Lebuhraya Butterworth-Kulim;BKE;Projek Lebuhraya Usahasama Berhad (PLUS Berhad)
E3;Lebuhraya Laluan Kedua Malaysia - Singapura;LINKEDUA;Projek Lebuhraya Usahasama Berhad (PLUS Berhad)
E36;Jambatan Pulau Pinang;JPP;Projek Lebuhraya Usahasama Berhad (PLUS Berhad)
E6;Lebuhraya Utara-Selatan Hubungan Tengah;ELITE;Projek Lebuhraya Usahasama Berhad (PLUS Berhad)
E8;Lebuhraya KL-Karak;KLK;ANIH Berhad
E8;Lebuhraya Pantai Timur;LPT1;ANIH Berhad
E37;Lebuhraya KL-Seremban;METRAMAC;ANIH Berhad
E35;Lebuhraya Koridor Guthrie;GCE;PROLINTAS Expressway Sdn. Bhd.
E12;Lebuhraya Bertingkat Ampang Kuala Lumpur;AKLEH;Projek Lintasan Kota Sdn Bhd
E13;Lebuhraya Kemuning-Shah Alam;LKSA;Projek Lintasan Shah Alam Sdn. Bhd
E9;Lebuhraya Sungai Besi;BESRAYA;Besraya (M) Sdn. Bhd.
E10;Lebuhraya Baru Pantai;NPE;New Pantai Expressway Sdn. Bhd.
E21;Lebuhraya Kajang-Seremban;LEKAS;Lebuhraya Kajang - Seremban Sdn. Bhd.
E11;Lebuhraya Damansara-Puchong;LDP;Lingkaran Transkota Holdings Bhd.
E23;Lebuhraya Sistem Penyuraian Trafik KL Barat;SPRINT;Sistem Penyuraian Trafik KL Barat Sdn. Bhd.
E38;Lebuhraya SMART;SMART;Syarikat Mengurus Air Banjir & Terowong Sdn. Bhd.
E7;Lebuhraya Cheras-Kajang;GRANDSAGA;Syarikat Grand Saga Sdn. Bhd.
E5;Lebuhraya Shah Alam;KESAS;KESAS Sdn Bhd.
E33;Lebuhraya Duta-Ulu Kelang;DUKE;Konsortium Lebuhraya Utara-Timur (Kl) Sdn. Bhd.
E20;Lebuhraya KL-Putrajaya;MEX;Maju Expressway Sdn. Bhd.
E22;Lebuhraya Senai-Desaru;SDE;Senai Desaru Expressway Berhad
E18;Lebuhraya Kajang SILK;SILK;Sistem Lingkaran - Lebuhraya Kajang Sdn. Bhd.
E26;Lebuhraya Lembah Klang Selatan;SKVE;SKVE Holdings Sdn. Bhd.
E25;Lebuhraya KL-Kuala Selangor;LATAR;KL-Kuala Selangor Expressway Berhad (KLSEB)
E30;Lebuhraya Pintas Selat Klang Utara Baru;GRANDSEPADU;Lebuhraya Shapadu Sdn. Bhd.
E17;Lebuhraya Lingkaran Luar Butterworth;BORR;Lebuhraya Lingkaran Luar Butterworth (Penang) Sdn Bhd
E14;Lebuhraya Penyuraian Trafik Timur Johor Bahru;EDL;MRCB Lingkaran Selatan Sdn. Bhd.
E28;Jambatan Sultan Abdul Halim Mu'adzam Shah;JSAHMS;Jambatan Kedua Sdn Bhd
E8;Lebuhraya Pantai Timur 2;LPT2;Lebuhraya Pantai Timur 2 Sdn. Bhd.";
        foreach (preg_split("/((\r?\n)|(\r\n?))/", $csv) as $line) {
            $highway = explode(';', $line);
            $cons = Concessionaire::whereName($highway[3])->first();
            $data = [
                'code' => $highway[0],
                'name' => $highway[1],
                'short' => $highway[2],
                'concessionaire_id' => $cons->id,
                'office_id' => 2,
                'lng' => rand(10, 100) . '.94808391318361',
                'lat' => '4.960152898974003'
            ];
            Highway::insert($data);
        }
    }
}
