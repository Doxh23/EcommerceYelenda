<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class CartModal extends Component
{
    public $product;

    #[On("Cart_update")]
    public function updateCart()
    {
        $this->product = Auth::user()->beersCart;
    }

    public function mount()
    {
        $this->product = Auth::user()->beersCart;
    }

    public function totalPrice()
    {
        $totalPrice = array_reduce($this->product->toArray(), function ($acc, $product) {
            $price = $product["price"];
            $number = $product["pivot"]["quantity"];

            $productPrice = $price * $number;
            return $acc + $productPrice;
        });

        return $totalPrice;
    }

    public function render()
    {
        $product = null;

        return view('livewire.cart-modal');
    }
}
