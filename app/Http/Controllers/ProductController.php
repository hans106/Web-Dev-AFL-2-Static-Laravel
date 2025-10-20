<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;
class ProductController extends Controller
{

    public function products(Request $request)
    {
        $query = Products::query();

        if ($request->filled('search')) {
            $query->where('name', 'like', '%' . $request->search . '%');
        }
        if ($request->filled('merk')) {
            $query->where('merk', $request->merk);
        }
        if ($request->filled('max_price')) {
            $query->where('price', '<=', $request->max_price);
        }

        $products = $query->get();

        $pageDescription = 'Temukan berbagai macam alat teknik berkualitas tinggi, dirancang untuk efisiensi dan durabilitas maksimal di setiap proyek Anda.';
        $judulCard = 'Kualitas yang Terjamin, Tempat Kami Beraksi.';
        $visitCard ='Lihat langsung di balik layar toko kami. Setiap alat dipilih dan disiapkan dengan standar kualitas tertinggi. Kunjungi kami untuk pengalaman berbelanja terbaik!';

        return view('products', [
            'title' => 'Katalog Produk Sumber Teknik',
            'description' => $pageDescription,
            'products' => $products,
            'judulCard' => $judulCard,
            'visitCard' => $visitCard
        ]);
    }
}
