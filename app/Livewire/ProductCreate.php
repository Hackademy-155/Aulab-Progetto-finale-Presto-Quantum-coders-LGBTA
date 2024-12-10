<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class ProductCreate extends Component
{
    #[Validate('required|min:3|max:15')]
    public $title;
    #[Validate('required|numeric')]
    public $price;
    #[Validate('required|min:10|max:150')]
    public $description;
    #[Validate('required')]
    public $category = '';
    public $product;
    public $is_accepted;

    public function create()
    {
        $this->validate();

        $this->product = Product::create([
            'title' => $this->title,
            'price' => $this->price,
            'description' => $this->description,
            'category_id' => $this->category,
            'user_id' => Auth::user()->id
        ]);

        $this->reset();

        return session()->flash('success', 'Prodotto aggiunto con successo');
    }


    public function setAccepted($value){
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public function render()
    {
        return view('livewire.product-create');
    }
}
