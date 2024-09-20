<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use App\Models\OrderedProduct;
use App\Models\ProductGallery;
use Illuminate\Support\Facades\DB;

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

        $reviews = OrderedProduct::where('product_id', $product->id)->whereNotNull('review')->get();
        $total_reviews = OrderedProduct::where('product_id', $product->id)->whereNotNull('review')->count();
        $total_stars = OrderedProduct::where('product_id', $product->id)->whereNotNull('review')->sum('star');

        $ratings = OrderedProduct::where('product_id', $product->id)
            ->select('star', DB::raw('COUNT(*) as count'))
            ->groupBy('star')
            ->get();

        $distribution = [];
        foreach ($ratings as $rating) {
            $distribution[$rating->star] = $rating->count;
        }

        for($i = 1; $i <= 5; $i++) {
            if(!isset($distribution[$i])) {
                $distribution[$i] = 0;
            }
        }

        return view('frontend.product.single-product', [
            'product' => $product,
            'galleries' => $galleries,
            'total_reviews' => $total_reviews,
            'reviews' => $reviews,
            'total_stars' => $total_stars,
            'distribution' => $distribution,
        ]);
    }

    public function getProductsByVendor(Request $request)
    {
        $subcategories = SubCategory::all();
        $vendorId = $request->vendor_id;

        // Fetch products by the selected vendor
        $products = Product::where('vendor_id', $vendorId)->get();

        // Return the view with products to be loaded via AJAX
        return view('frontend.product.partials.product_list', compact('products', 'subcategories', 'vendorId'))
        ->render();
    }

    public function searchProducts(Request $request)
    {
        $searchQuery = $request->input('search_query');
        $vendorId = $request->input('vendor_id');

        // Fetch products where the product name matches the search query
        $products = Product::where('product_name', 'LIKE', '%' . $searchQuery . '%')->where('vendor_id', $vendorId)->get();

        // Return the view with products to be loaded via AJAX
        return view('frontend.product.partials.search_product_list', compact('products'))->render();
    }

}
