<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Product;
use App\Mail\BecomeRevisor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Artisan;
use Livewire\Livewire;

class RevisorController extends Controller
{

    

    public function index()
    {
        $product_to_check = Product::where('is_accepted', null)->first();
        return view('revisor.index', compact('product_to_check'));
    }
    public function accept(Product $product)
    {
        $product->setAccepted(true);
        
        return redirect()->back()->with('message', "Hai accettato l'annuncio $product->title");

    }
    public function reject(Product $product)
    {
        $product->setAccepted(false);
        
        return redirect()->back()->with('message', "Hai rifiutato l'annuncio $product->title");
    }

    public function becomeRevisor()
    {
        Mail::to('admin@presto.it')->send(new BecomeRevisor(Auth::user()));
        return redirect()->route('home')->with('message', 'Complimenti, Hai richiesto di diventare revisore');
    }

    public function makeRevisor(User $user)
    {
        Artisan::call('app:make-user-revisor', ['email' => $user->email]);
        return redirect()->back();
    }
}
