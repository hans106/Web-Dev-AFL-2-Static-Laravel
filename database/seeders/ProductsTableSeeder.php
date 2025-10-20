<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ProductsTableSeeder extends Seeder
{
    public function run()
    {
        $imageDir = public_path('images/100_ITEM_PERSEDIAAN_SUMBER_TEKNIK');
        $files = glob($imageDir . '/*.{jpg,jpeg,png}', GLOB_BRACE);

        $products = [];
        foreach ($files as $filePath) {
            $filename = basename($filePath);

            $filenameNoExt = pathinfo($filename, PATHINFO_FILENAME);

            if (!preg_match('/RP[0-9.,]+$/i', $filenameNoExt, $hargaMatch)) continue;
            $hargaStr = $hargaMatch[0];
            $harga = (int)str_replace(["RP", ",", "."], "", strtoupper($hargaStr));
           
            $namaBarangFull = trim(str_replace($hargaStr, '', $filenameNoExt));
            
            $namaBarangWords = preg_split('/\s+/', $namaBarangFull);
            $merk = $namaBarangWords[0];
            $namaBarang = trim($namaBarangFull);
            $gambar = 'images/100_ITEM_PERSEDIAAN_SUMBER_TEKNIK/' . $filename;

            $deskripsi = "Fungsi $namaBarang adalah untuk membantu pekerjaan sesuai kebutuhan anda.";

            $products[] = [
                'name' => $namaBarang,
                'merk' => $merk,
                'price' => $harga,
                'image' => $gambar,
                'description' => $deskripsi,
                'created_at' => now(),
                'updated_at' => now(),
            ];
        }
        DB::table('products')->insert($products);
    }
}
