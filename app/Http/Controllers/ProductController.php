<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\Middleware;
use Illuminate\Routing\Controllers\HasMiddleware;

class ProductController extends Controller implements HasMiddleware
{
    static public function middleware()
    {
        return[
            new Middleware('auth'),
        ];
    }

    public function createPage(){
        return view('products.product-create');
    }


    public function index(){
        $products = Product::all();
        return view('products.product-index', compact('products'));
    }

}
