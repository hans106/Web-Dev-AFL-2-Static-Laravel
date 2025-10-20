<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $fillable = ['user_name', 'rating', 'content'];
    
 
    public function setRatingAttribute($value)
    {
        $this->attributes['rating'] = min(5, max(1, $value));
    }
}