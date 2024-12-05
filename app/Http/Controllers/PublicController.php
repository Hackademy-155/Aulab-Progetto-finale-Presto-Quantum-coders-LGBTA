<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        return view('home');
    }

    public function index(){
        $products = Product::all();
        return view('products.product-index', compact('products'));
    }
}
