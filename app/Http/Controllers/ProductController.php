<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
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
    
    
    public function index()
    {
        $products = Product::with('category')->orderBy('created_at', 'desc')->paginate(6);
        return view('products.product-index', compact('products'));
    }
    
    
    
    public function show(Product $product, Category $category){
        return view('products.product-show', compact('product', 'category'));
    }
    
    public function filterByCategory(Category $category){
        return view('products.byCategory', ['products' => $category->products, 'category' => $category]);
    }
}
