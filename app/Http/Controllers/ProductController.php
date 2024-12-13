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
        return [
            new Middleware('auth'),
        ];
    }

    public function createPage()
    {
        return view('products.product-create');
    }


    public function index()
    {
        $products = Product::where('is_accepted', true)->orderBy('created_at', 'desc')->paginate(9);
        return view('products.product-index', compact('products'));
    }



    public function show(Product $product, Category $category)
    {
        return view('products.product-show', compact('product', 'category'));
    }

    public function filterByCategory(Category $category)
    {
        $products = $category->products()->where('is_accepted', 1)->get();

        return view('products.byCategory', compact('products', 'category'));
    }
}
