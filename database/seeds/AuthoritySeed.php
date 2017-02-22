<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Authority;

class AuthoritySeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $csv = "Dewan Bandaraya Kuala Lumpur;DBKL;1
Majlis Bandaraya Petaling Jaya;MBPJ;1
Majlis Perbandaran Subang Jaya;MPSJ;1
Majlis Perbandaran Ampang Jaya;MPAJ;1
Majlis Bandaraya Shah Alam;MBSA;1
Majlis Bandaraya Johor Bahru;MBJB;1
Majlis Perbandaran Johor Bahru Tengah;MBJBT;1
Majlis Bandaraya Ipoh;MBI;1
Majlis Perbandaran Pulau Pinang;MPPP;1
Majlis Bandaraya Melaka Bersejarah;MBMB;1
Majlis Perbandaran Klang;MPK;2
Majlis Perbandaran Sepang;MPSPG;2
Majlis Perbandaran Selayang;MPS;2
Majlis Perbandaran Pasir Gudang;MPPG;2
Majlis Perbandaran Seremban;MPSBN;2
Majlis Perbandaran Port Dickson;MPPD;2
Majlis Perbandaran Kuantan;MPKTN;2
Majlis Perbandaran Seberang Perai;MPSP;2
Majlis Bandaraya Alor Setar;MBAS;2
Majlis Bandaraya Kuala Terengganu;MBKT;2
Dewan Bandaraya Kuching Utara;DBKY;2
Majlis Perbandaran Kuching Selatan;MPKS;2
Dewan Bandaraya Kota Kinabalu;DBKK;2
Lain - lain Majlis Daerah / Perbandaran;LL;3";
        foreach (preg_split("/((\r?\n)|(\r\n?))/", $csv) as $line) {
            $highway = explode(';', $line);
            $data = [
                'name' => $highway[0],
                'short' => $highway[1],
                'zone_id' => $highway[2]
            ];
            Authority::insert($data);
        }
    }
}
