<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Activity;

class ActivitySeeder extends Seeder
{
    public function run()
    {
        $activities = [
            [
                'image' => 'images/activities/PosterLowonganPekerjaan.png',
                'description' => 'LOWONGAN KERJA: Dibutuhkan segera TEKNISI MESIN. Kirim CV ke email: karir@sumberteknik.com',
                'is_job_vacancy' => true
            ],
            [
                'image' => 'images/activities/gambarDalamToko1.png',
                'description' => 'Kegiatan operasional harian di toko Sumber Teknik. Tim kami siap melayani kebutuhan alat teknik Anda.',
                'is_job_vacancy' => false
            ],
            [
                'image' => 'images/activities/gambarDalamToko2.png',
                'description' => 'Pelatihan internal untuk meningkatkan pengetahuan produk dan pelayanan kepada pelanggan.',
                'is_job_vacancy' => false
            ],
            [
                'image' => 'images/activities/GambarJualBeliSumberTeknik.jpg',
                'description' => 'Transaksi jual beli alat teknik di Sumber Teknik, selalu mengutamakan kepercayaan dan kualitas.',
                'is_job_vacancy' => false
            ]
        ];

        foreach ($activities as $activity) {
            Activity::create($activity);
        }
    }
}