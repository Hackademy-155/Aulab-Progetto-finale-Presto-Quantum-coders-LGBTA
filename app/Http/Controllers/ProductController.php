<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controllers\HasMiddleware;
use Illuminate\Routing\Controllers\Middleware;

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

  
}
