<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ContactUs;

class ContactUsController extends Controller
{
    public function contact()
    {
    $contactData = ContactUs::getContactInfo();
    return view('contact', [
            'title' => 'Contact Us | Sumber Teknik',
            'hubungi' => 'Hubungi Kami',
            'contactData' => $contactData
        ]); 
    }
}
