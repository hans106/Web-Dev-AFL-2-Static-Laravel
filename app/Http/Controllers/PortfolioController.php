<?php

namespace App\Http\Controllers;
use App\Models\Activity;
use App\Models\Testimonial;

class PortfolioController extends Controller
{
    public function index()
    {
        return view('portofolio', [
            'title' => 'Portfolio & Activities',
            'activities' => Activity::orderBy('created_at', 'desc')->get(),
            'testimonials' => Testimonial::orderBy('rating', 'desc')->get()
        ]);
    }
}