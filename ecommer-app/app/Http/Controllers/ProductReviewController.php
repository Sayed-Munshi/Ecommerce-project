<?php

namespace App\Http\Controllers;

use App\Models\OrderedProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductReviewController extends Controller
{
    /**
     * Storing review
    */
    function product_review(Request $request, $id)
    {
        $request->validate([
            'star' => 'required',
            'review' => 'required',
        ]);

        OrderedProduct::where('customer_id', Auth::id())->where('product_id', $id)->first()->update([
            'review' => $request->review,
            'star' => $request->star,
            'updated_at' => now(),
        ]);

        return back();
    }
}
