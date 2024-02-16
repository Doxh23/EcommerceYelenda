<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class cartController extends Controller
{
    public function index(Request $request)
    {


        return view("cart.index");
    }

    public function addToCard($id, $qty)
    {
        dd(["id" => $id, "qty" => $qty]);
    }
}
