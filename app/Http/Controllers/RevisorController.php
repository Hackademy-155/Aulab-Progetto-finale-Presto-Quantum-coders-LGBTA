<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class RevisorController extends Controller{

    public function index() {
        $product_to_check = Product::where('is_accepted', null)->first();
        return view('revisor.index', compact('product_to_check'));
    }

}

