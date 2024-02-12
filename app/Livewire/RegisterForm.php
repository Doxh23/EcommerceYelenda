<?php

namespace App\Livewire;

use Illuminate\Database\QueryException;
use Livewire\Attributes\Rule;
use Livewire\Attributes\Validate;
use Livewire\Component;


class RegisterForm extends Component
{


    #[Rule("required")]
    public $name;

    #[Validate("required")]
    public $surname;
    #[Validate("required|unique:users")]
    public $nickname;
    public $password;
    #[Validate("required|email|unique:users")]
    public $email;
    #[Validate("required")]
    public $address;
    #[Validate("required")]
    public $city;
    #[Validate("required")]
    public $code_postal;
    #[Validate("regex:/(04)[0-9]{9}/", message: "fill with a valid phone number")]
    public $phone;
    protected $rules = [
        'password' => 'required|regex:/^(?=.*[A-Z])/' .
            '|regex:/(?=.*[a-z])/' .
            '|regex:/(.*[0-9].*)/' .
            '|regex:/(?=.*[!@#$%^&*])/',
    ];
    protected $messages = [
        'password.required' => ['Le champ mot de passe est requis.'],
        'password.regex' => [
            '(?=.*[A-Z])/' => 'Le mot de passe doit contenir au moins une lettre majuscule.',
            '/(?=.*[a-z])/' => 'Le mot de passe doit respecter le format spécifié.',
            '/(?=.*[!@#$%^&*])/' => "le mot de passe doit respecter le format spécifié"
        ],
    ];

    public function submit()
    {
        $credential = $this->validate();

        try {
            \App\Models\User::create($credential);
            return redirect("")->with(["success" => "l'utilisateur a bien été créé"]);
        } catch (QueryException) {
            return redirect("")->with(["failed" => "erreur : l'utilisateur n'a pas pu etre crée, veuillez ressayer ulterieur"]);
        }

    }

    public function render()
    {
        return view('livewire.register-form');
    }
}
