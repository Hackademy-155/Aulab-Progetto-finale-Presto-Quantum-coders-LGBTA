<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function createPage(){
        return view('products.product-create');
    }
}
