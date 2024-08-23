<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Category;
use App\Models\Product;
use App\Models\ProductGallery;
use App\Models\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Viewing page
    */
    function product()
    {
        $categories = Category::all();
        $subcategories = SubCategory::all();

        return view('backend.product.product', [
            'categories' => $categories,
            'subcategories' => $subcategories,
        ]);
    }

    /**
     * Get subcategory using ajax
    */
    function get_subcategory(Request $request)
    {
        $str = '<option value="">Select option</option>';
        $subcategories = SubCategory::where('category_id', $request->category_id)->get();

        foreach($subcategories as $subcategory) {
            $str .= '<option value="'.$subcategory->id.'">'.ucwords($subcategory->name).'</option>';
        }
        echo $str;
    }

    /**
     * Storing product
    */
    function store(ProductRequest $request)
    {
        $thumbnail = $request->thumbnail_image;
        $extension = $thumbnail->extension();
        $db_thumbnail_name = "images/products/thumbnail/".str_replace(' ', '-', strtolower($request->product_name)).'-'."thumbnail".'-'.time().'.'.$extension;
        $thumbnail_name = str_replace(' ', '-', strtolower($request->product_name)).'-'."thumbnail".'-'.time().'.'.$extension;
        $thumbnail_path = "images/products/thumbnail/".$thumbnail_name;

        $product_id = Product::insertGetId([
            'user_id' => Auth::user()->id,
            'product_name' => $request->product_name,
            'category_id' => $request->category_id,
            'subcategory_id' => $request->subcategory_id,
            'purchase_price' => $request->purchase_price,
            'discount_type' => $request->discount_type,
            'discount_amount' => $request->discount_amount,
            'sell_price' => $request->sell_price,
            'thumbnail_image' => $db_thumbnail_name,
            'description' => $request->description,
            'additional_description' => $request->additional_description,
            'created_at' => now(),
        ]);

        Storage::disk('public')->put($thumbnail_path, file_get_contents($thumbnail));

        if($request->gallery_image) {
            $galleries = $request->gallery_image;

            foreach($galleries as $gallery) {
                $image_extension = $gallery->extension();
                $db_image_name = "images/products/gallery/".str_replace(' ', '-', strtolower($request->product_name)).'-'."gallery".'-'.time().random_int(1, 1000).'.'.$image_extension;
                $image_name = str_replace(' ', '-', strtolower($request->product_name)).'-'."gallery".'-'.time().random_int(1, 1000).'.'.$image_extension;
                $image_path = "images/products/gallery/".$image_name;

                Storage::disk('public')->put($image_path, file_get_contents($gallery));

                ProductGallery::insert([
                    'product_id' => $product_id,
                    'gallery_image' => $db_image_name,
                    'created_at' => now(),
                ]);
            }
        }

        return redirect(route('products'))->with('success', "Product added successfully!");
    }

    /**
     * Viewing products
    */
    function products()
    {
        $products = Product::where('user_id', Auth::user()->id)->latest()->get();

        return view('backend.product.products', [
            'products' => $products,
        ]);
    }
}
