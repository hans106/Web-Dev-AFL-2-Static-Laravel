<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\About;

class AboutContoller extends Controller{
    public function about()
    {
    $aboutData = About::allData();
    return view('about', [
            'title' => 'About Us - Sumber Teknik',
            'aboutData' => $aboutData
        ]);
    }
}


