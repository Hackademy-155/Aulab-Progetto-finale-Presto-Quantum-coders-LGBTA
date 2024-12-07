<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $products= Product::take(6)->orderBy('created_at', 'desc')->get();
        return view('home', compact('products'));
    }

}
