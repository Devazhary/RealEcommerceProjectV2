<?php

namespace App\Http\Controllers\FrontStore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('FrontStore.products', compact('products'));
    }
}
