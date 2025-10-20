<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    
    public static function getProductData()
    {
        $pageDescription = 'Temukan berbagai macam alat teknik berkualitas tinggi, dirancang untuk efisiensi dan durabilitas maksimal di setiap proyek Anda.';
        $judulCard = 'Kualitas yang Terjamin, Tempat Kami Beraksi.';
        $visitCard ='Lihat langsung di balik layar toko kami. Setiap alat dipilih dan disiapkan dengan standar kualitas tertinggi. Kunjungi kami untuk pengalaman berbelanja terbaik!';
        $products = self::all();

        return [
            'description' => $pageDescription,
            'products' => $products,
            'judulCard' => $judulCard,
            'visitCard' => $visitCard
        ];
    }
}