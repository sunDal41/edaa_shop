<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use App\Models\Category;

class Product extends Model implements HasMedia 
{
    use InteractsWithMedia;

    protected $fillable = [
        'product_name',
        'product_code',
        'price',
        'tanggal_masuk',
        'quantity',
    ];

    public function categories(){
        return $this->belongsToMany(Category::class, 'product_categories');
    }
}
