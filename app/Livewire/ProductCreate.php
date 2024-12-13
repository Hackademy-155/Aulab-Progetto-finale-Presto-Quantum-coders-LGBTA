<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\Attributes\Validate;
use Illuminate\Support\Facades\Auth;

class ProductCreate extends Component
{
    use WithFileUploads;


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
    // gestione immagini
    public $images = [];
    public $temporary_images;

    public function messages()
    {
        return [
            'title' => 'Il campo titolo è obbligatorio',
            'title.min' => 'Caratteri minimi :min ',
            'title.max' => 'Caratteri massimi :max',
            'price' => 'Il campo prezzo è obbligatorio',
            'price.numeric' => 'Il campo prezzo deve contenere caratteri numerici',
            'description' => 'Il campo descrizione è obbligatorio',
            'description.min' => 'Caratteri minimi :min',
            'description.max' => 'Caratteri massimi :max',
            'category' => 'Il campo categoria è obbligatorio',

        ];
    }

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


        if (count($this->images) > 0) {
            foreach ($this->images as $image) {
                $this->product->images()->create(['path' => $image->store('images', 'public')]);
            }
        }

        $this->reset();

        return session()->flash('success', 'Prodotto aggiunto con successo');
        $this->cleanForm();
    }


    public function setAccepted($value)
    {
        $this->is_accepted = $value;
        $this->save();
        return true;
    }

    public function updatedTemporaryImages()
    {
        if ($this->validate([
            'temporary_images.*' => 'image|max:1024',
            'temporary_images' => 'max:6'
        ])) {
            foreach ($this->temporary_images as $image) {
                $this->images[] = $image;
            }
        }
    }

    public function removeImage($key)
    {
        if (in_array($key, array_keys($this->images))) {
            unset($this->images[$key]);
        }
    }

    protected function cleanForm()
    {
        $this->title = '';
        $this->description = '';
        $this->category = '';
        $this->price = '';
        $this->images = [];
    }

    public function render()
    {
        return view('livewire.product-create');
    }
}
