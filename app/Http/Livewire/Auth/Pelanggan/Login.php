<?php

namespace App\Http\Livewire\Auth\Pelanggan;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component
{
    public $name;
    public $password;
    public $remember;

    public function render()
    {
        return view('livewire.auth.pelanggan.login');
    }
    public function login()
    {
        $this->validate([
            'name' => 'required|string',
            'password' => 'required|string',
        ]);

        $credential = ['name' => $this->name, 'password' => $this->password];

        if(Auth::attempt($credential)){
            return redirect()->route('home');
        }else{
            session()->flash('message-danger', 'These credentials do not match our records.');
        }
    }

}
