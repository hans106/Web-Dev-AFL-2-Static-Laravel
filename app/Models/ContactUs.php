<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    public static function getContactInfo()
    {
        $contactUs =[
            'alamat' => 'Jl. Ir Soekarno HH 32 SOLO BARU',
            'no_Kontak' => '08122972876',
            'email' => 'sumbertekniksolo@gmail.com',
        ];
        return $contactUs;
    }
}
