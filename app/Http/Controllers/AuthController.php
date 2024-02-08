<?php

namespace App\Http\Controllers;

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
//            "password" => hash("sha256", "test1234"),
//        ]);
        return view("welcome");
    }

}
