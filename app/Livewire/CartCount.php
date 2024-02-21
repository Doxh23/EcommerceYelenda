<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\On;
use Livewire\Component;

class CartCount extends Component
{
    public $cartNbr;


    #[On("Cart_number_update")]
    public function updateCount()
    {
        if (Auth::check()) {
            $this->cartNbr = Auth::user()->beersCart->count();
        }
    }

    public function mount()
    {
        if (Auth::check()) {
            $this->cartNbr = Auth::user()->beersCart->count();
        }
    }

    public function render()
    {
        return view('livewire.cart-count');
    }
}
