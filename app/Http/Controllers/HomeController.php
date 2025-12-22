<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index ()
   {
    // Produk utama (hero)
    $product = Product::first();

    // Produk lain (kecuali produk utama)
    $otherProducts = Product::where('id', '!=', $product->id)
        ->latest()
        ->take(3) // bebas mau berapa
        ->get();

    return view('home.index', compact('product', 'otherProducts'));
   }
}