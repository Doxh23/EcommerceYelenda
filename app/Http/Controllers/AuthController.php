<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {

//        User::create([
//            "id" => 1,
//            "name" => "Adrien",
//            "surname" => "Péters",
//            "nickname" => "dox",
//            "address" => "best place eu",
//            "city" => "flemalle",
//            "code_postal" => 4400,
//            "phone" => "0497859536",
//            "email" => "peters-adrien@live.be",
//            "password" => Hash::make("test1234")
//        ]);

//        role::insert([
//            ["nom" => "test"], ["nom" => "test1"], ["nom" => "test2"], ["nom" => "test3"],
//        ]);
        return view("welcome");
    }

    public function login()
    {
        return view("auth.login");
    }

    public function register()
    {
        return view("auth.register");
    }

    public function logout()
    {

        Auth::logout();
        return to_route("welcome")->with(["success" => "vous etes bien deconnecté"]);
    }


}
