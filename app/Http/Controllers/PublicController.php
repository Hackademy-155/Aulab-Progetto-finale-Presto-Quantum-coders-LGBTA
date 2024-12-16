<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use Laravel\Scout\Searchable;

class PublicController extends Controller
{
    use Searchable;


    // public function changeLocale($locale)
    // {
    //     // Verifica che la lingua sia supportata
    //     $availableLocales = ['it', 'en', 'fr', 'de', 'es'];
    //     if (in_array($locale, $availableLocales)) {
    //         session(['locale' => $locale]); // Salva la lingua nella sessione
    //         app()->setLocale($locale); // Imposta la lingua attiva
    //     }

    //     // Reindirizza alla pagina precedente
    //     return redirect()->back();
    // }


    public function home()
    {
        $products = Product::where('is_accepted', true)->orderBy('created_at', 'desc')->take(6)->get();
        return view('home', compact('products'));
    }

    public function lavoraConNoi()
    {
        return view('lavoraConNoi');
    }
    public function searchProduct(Request $request)
    {
        $query = $request->input('query');

        $products = Product::where('is_accepted', 1)
            ->where(function ($queryBuilder) use ($query) {
                $queryBuilder->where('title', 'like', '%' . $query . '%')
                    ->orWhereHas('category', function ($categoryQuery) use ($query) {
                        $categoryQuery->where('name', 'like', '%' . $query . '%');
                    });
            })
            ->orderBy('created_at', 'desc')
            ->paginate(6);

        return view('products.search', ['products' => $products, 'query' => $query]);
    }

    public function setLanguage($lang)
    {
        session()->put('locale', $lang);
        return redirect()->back();
    }
}
