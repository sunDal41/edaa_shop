<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Session;


class CartController extends Controller
{
    public function add(Request $request)
    {
        $product = Product::findOrFail($request->product_id);

        // Ambil cart dari session
        $cart = Session::get('cart', []);

        // Jika produk sudah pernah ditambahkan, tambah qty
        if (isset($cart[$product->id])) {
            $cart[$product->id]['qty'] += 1;
        } else {
            // Jika baru pertama kali
            $cart[$product->id] = [
                'name'  => $product->name,
                'price' => $product->price,
                'image' => $product->image,
                'qty'   => 1
            ];
        }

        Session::put('cart', $cart);

        return back()->with('success', 'Produk masuk ke keranjang!');
    }
}
