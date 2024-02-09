<?php

namespace App\Livewire;


use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Rule;
use Livewire\Component;

class LoginForm extends Component
{
    #[Rule("required", message: "please complete your nickname")]
    public $nickname;
    #[Rule("required", message: "please complete your password")]
    public $password;


    public function submit()
    {
        $credentials = $this->validate();
        $salut = "";
        if (Auth::attempt($credentials)) {
            session()->regenerate();
            return redirect("/")->with(["success" => "vous etes bien connecté"]);
        }
        return to_route("auth.login")->with(["failed" => "you username or password is incorrect"]);
    }

    public function render()
    {
        return view('livewire.login-form');
    }
}
