<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;

class ProductCounter extends Component
{
    public $count;

    // Ascolta l'evento 'productAdded' emesso dal controller
    protected $listeners = ['productAdded' => 'updateCount'];

    public function mount()
    {
        $this->count = Product::toBeRevisedCount();
    }

    public function updateCount()
    {
        // Aggiorna il conteggio dei prodotti
        $this->count = Product::toBeRevisedCount();
    }

    public function render()
    {
        return view('livewire.product-counter');
    }
}
