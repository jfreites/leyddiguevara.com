<?php

namespace App\Http\Controllers;

use App\Product;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function detail($slug)
    {
        $product = Product::whereSlug($slug)->first();

        if (!$product) {
            return back()->with('message', 'Producto no encontrado');
        }

        return view('site.listing.detail', compact('product'));
    }
}
