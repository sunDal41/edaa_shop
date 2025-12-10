<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function detail($id)
    {
        $product = \App\Models\Product::find($id);
        return view('product.detail', compact('product'));
    }
}
