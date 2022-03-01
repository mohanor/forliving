<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_en',
        'title_fr',
        'title_ar',
        'description_en',
        'description_fr',
        'description_ar',
        'price',
        'compare_price',
        'user_id'
    ];

    public function categories()
    {
        return $this->belongsTo('Category');
    }

    public function images()
    {
        return $this->hasMany('App\Models\Image');
    }
}
