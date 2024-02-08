<?php

namespace App\Livewire;

use Livewire\Component;

class Login extends Component
{
    public $email = "";
    public $password = "";

    public function updated($property, $value)
    {
        dd($value);
    }

    public function render()
    {
        return view('livewire.login');
    }
}
