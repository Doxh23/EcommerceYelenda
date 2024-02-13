<?php

namespace App\Http\Controllers;

use App\Models\beer;

class productController extends Controller
{
    public function index()
    {
        $product = beer::all()->load(["brand", "flavor", "brewing", "containing", "category"]);

        return view("product.index");
    }
}
