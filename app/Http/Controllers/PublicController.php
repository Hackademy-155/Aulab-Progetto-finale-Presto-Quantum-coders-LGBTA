<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function home(){
        $products= Product::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view ('home', compact('products'));
    }

    public function lavoraConNoi(){
        return view('lavoraConNoi');
    }

    public function searchProduct(Request $request){
        $query=$request->input('query');
        $products=Product::search($query)->where('is_accepted', true)->paginate(10);
        return view('products.search',['products'=>$products, 'query'=>$query]);
    }
}
