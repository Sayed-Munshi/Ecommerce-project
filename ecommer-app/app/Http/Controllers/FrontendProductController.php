<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\User;
use Illuminate\Http\Request;

class FrontendProductController extends Controller
{
    function single_product($slug)
    {
        $details = Product::where('slug', $slug)->get();

        $product = '';

        foreach ($details as $value) {
            $product = $value;
        }

        $galleries = ProductGallery::where('product_id', $product->id)->get();

        return view('frontend.product.single-product', [
            'product' => $product,
            'galleries' => $galleries,
        ]);
    }
}
