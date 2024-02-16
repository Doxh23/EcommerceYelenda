<?php

namespace App\Http\Controllers;

use App\Models\beer;

class productController extends Controller
{
    public function index()
    {


        return view("product.index");
    }

    public function product(int $id)
    {
        $product = beer::find($id)->load(["brand", "flavor", "brewing", "containing", "category"]);

        return view("product.product", ["data" => $product]);

    }


}
