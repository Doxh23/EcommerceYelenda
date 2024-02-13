<?php

namespace App\Livewire;

use App\Models\beer;
use Livewire\Component;

class ProductsIndex extends Component
{
    private $product = null;

    public function render()
    {
        $this->setProduct();
        $product = $this->getProduct();
        return view('livewire.products-index', ["data" => $product]);
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct()
    {
        $this->product = beer::all()->load(["brand", "flavor", "brewing", "containing", "category"]);
    }

    public function refresh()
    {
        $this->setProduct();
    }
}
