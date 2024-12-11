<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Laravel\Scout\Searchable;

class PublicController extends Controller
{
    use Searchable;
    public function home(){
        $products= Product::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view ('home', compact('products'));
    }

    public function lavoraConNoi(){
        return view('lavoraConNoi');
    }

    public function searchProduct(Request $request){
        $query=$request->input('query');
        $products = Product::where('is_accepted', 1)
                   ->orderBy('created_at', 'desc')
                   ->paginate(6);


        return view('products.search',['products'=>$products, 'query'=>$query]);
    }
}
