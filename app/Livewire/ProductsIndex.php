<?php

namespace App\Livewire;

use App\Models\beer;
use App\Models\brand;
use Illuminate\Routing\Route;
use Illuminate\Support\Facades\Request;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\Features\SupportPagination\PaginationUrl;
use Livewire\Features\SupportQueryString\BaseUrl;

class ProductsIndex extends Component
{
    #[PaginationUrl(keep: true)]
    public $search = "";
    #[PaginationUrl(keep: true)]
    public $brand = "";

    private $product = null;

    public function render()
    {

        $this->setProduct();
        $product = $this->getProduct();
        $brandData = brand::all();
        return view('livewire.products-index', ["data" => $product, "brandData" => $brandData]);
    }

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct()
    {


        $this->product = $products = Beer::query()
            ->with(["brand", "flavor", "brewing", "containing", "category"])
            ->where("stock", ">", 0)
            ->where(function ($query) {
                $query->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            });
        if ($this->brand != "") {
            $this->product->whereHas('brand', function ($query) {
                $query->where('name', $this->brand);
            });
        }
        $this->product = $this->product->get();
    }

    public function setBrand()
    {

    }

    public function refresh()
    {
        $this->setProduct();
    }
}
