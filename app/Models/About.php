<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class About extends Model
{
    use HasFactory;

    private static $aboutData = [
        'title' => 'About Us - Sumber Teknik',
        'description1' => '<b>Selamat datang di <b> Sumber Teknik Toko | Solo Baru </b>, mitra terpercaya Anda untuk solusi perkakas dan kebutuhan teknis.
                            Didirikan dengan komitmen pada kualitas dan layanan pelanggan, kami berdedikasi untuk menyediakan produk-produk teknik terbaik, 
                            mulai dari peralatan industri berat hingga kebutuhan bengkel rumahan.</b>',
        'description2' => '<b>Kami percaya bahwa keberhasilan proyek Anda dimulai dari alat yang tepat. Oleh karena itu, kami
                    memastikan setiap produk yang kami sediakan telah melewati standar kualitas ketat, menjadikan kami
                    pilihan utama bagi kontraktor, teknisi, dan penggemar DIY di wilayah Solo dan sekitarnya.</b>',
        'visi' => 'Menjadi toko perkakas dan accessories perkakas terlengkap',
        'misi' => 'Menyediakan perkakas dan accessories perkakas.',
        'kelebihan' => [
            [
                'title' => 'Produk Berkualitas',
                'description' => 'Semua produk kami bersumber dari distributor resmi dengan garansi pabrikan
                            yang jelas.',
            ],
            [
                'title' => 'Stok Selalu Tersedia',
                'description' => 'kami menjaga ketersediaan stok agar kebutuhan proyek Anda tidak terhambat.',
            ],
            [
                'title' => 'Layanan Pelanggan Terbaik',
                'description' => 'Tim kami siap membantu Anda dengan pengetahuan produk dan dukungan purna jual.',
            ],
        ]
    ];
    public static function allData()
    {
        return self::$aboutData;
    }
}
