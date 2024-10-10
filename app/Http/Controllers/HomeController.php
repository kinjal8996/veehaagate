<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function allproducts()
    {
        $categories = Category::with('products')->get();

    return view('frontend.allproducts', compact('categories'));
    }

    public function productidview($id)
    {
        $product = Product::with('subcategory', 'category')->findOrFail($id);
        return view('frontend.productidview', compact('product'));
    }
}
