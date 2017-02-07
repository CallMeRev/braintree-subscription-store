<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Product;

class SiteController extends Controller
{

    public function showHome() {
        $products = Product::with('owner')->get();
        return view('pages.home', compact('products'));
    }

    public function showSubscribe(Product $product)
    {
        return view('pages.subscribe', compact('product'));
    }

    // public function showProduct($slug) {
    //     $product = Product::whereSlug($slug)->with('owner')->first();
    //     return view('pages.product', compact('product'));
    // }

}
