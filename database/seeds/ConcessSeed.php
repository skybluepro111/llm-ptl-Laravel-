<?php

use Illuminate\Database\Seeder;
use App\Models\Data\Concessionaire;

class ConcessSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            'Projek Lebuhraya Usahasama Berhad (PLUS Berhad)',
            'ANIH Berhad',
            'PROLINTAS Expressway Sdn. Bhd.',
            'Projek Lintasan Kota Sdn Bhd',
            'Projek Lintasan Shah Alam Sdn. Bhd',
            'Besraya (M) Sdn. Bhd.',
            'New Pantai Expressway Sdn. Bhd.',
            'Lebuhraya Kajang - Seremban Sdn. Bhd.',
            'Lingkaran Transkota Holdings Bhd.',
            'Sistem Penyuraian Trafik KL Barat Sdn. Bhd.',
            'Syarikat Mengurus Air Banjir & Terowong Sdn. Bhd.',
            'Syarikat Grand Saga Sdn. Bhd.',
            'KESAS Sdn Bhd.',
            'Konsortium Lebuhraya Utara-Timur (Kl) Sdn. Bhd.',
            'Maju Expressway Sdn. Bhd.',
            'Senai Desaru Expressway Berhad',
            'Sistem Lingkaran - Lebuhraya Kajang Sdn. Bhd.',
            'SKVE Holdings Sdn. Bhd.',
            'KL-Kuala Selangor Expressway Berhad (KLSEB)',
            'Lebuhraya Shapadu Sdn. Bhd.',
            'Lebuhraya Lingkaran Luar Butterworth (Penang) Sdn Bhd',
            'MRCB Lingkaran Selatan Sdn. Bhd.',
            'Jambatan Kedua Sdn Bhd',
            'Lebuhraya Pantai Timur 2 Sdn. Bhd.'
        ];

        foreach ($items as $name) {
            $conc = new Concessionaire();
            $conc->name = $name;
            $conc->save();
        }
    }
}
