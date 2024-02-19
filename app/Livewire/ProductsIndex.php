<?php

namespace App\Livewire;

use App\Models\beer;
use App\Models\brand;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Livewire\Features\SupportPagination\PaginationUrl;
use mysql_xdevapi\Exception;

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

    public function addToCard($id, $qty)
    {
        $user = Auth::user();
        $beerCart = $user->beersCart();
        try {
            $beer = $beerCart->where("id", $id)->first();

            if ($beer) {


                $beerCart->updateExistingPivot($id,
                    ["quantity" => $beer->pivot->quantity += $qty,
                        "updated_at" => now()]);


            } else {
                $beerCart->attach($id, ["quantity" => $qty, 'created_at' => now(),
                    'updated_at' => now()]);
            }
            $this->dispatch("Cart_number_update");
        } catch (Exception $ex) {

        }

    }


}
