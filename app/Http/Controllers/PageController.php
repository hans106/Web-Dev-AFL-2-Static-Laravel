<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function home(){
        return view('home', [ 'title' => 'Sumber Teknik Toko | Solo Baru',
        'openingTeks' => 'Selamat datang di Sumber Teknik, toko alat teknik terpercaya di Solo.'
        ]);
    }



    public function products(){
        return view('products', ['title' => 'Katalog Produk Sumber Teknik'
        ]);
    }

    public function portfolio(){
        return view('portofolio',['title' => 'Gallery'
            ]);
    }


}
