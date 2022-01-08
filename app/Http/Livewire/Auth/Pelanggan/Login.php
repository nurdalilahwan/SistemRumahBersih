<?php

namespace App\Http\Livewire\Auth\Pelanggan;

use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Livewire\Component;

class Login extends Component
{
    public $username;
    public $password;
    public $remember;

    public function render()
    {
        return view('livewire.auth.pelanggan.login');
    }
    public function login()
    {
        $this->validate([
            'username' => 'required|string',
            'password' => 'required|string',
        ]);

        $credential = ['username' => $this->username, 'password' => $this->password, 'profile_type' => 'App\Models\UserAwam'];

        if(Auth::attempt($credential)){
            return redirect()->route('home');
        }else{
            session()->flash('message-danger', 'These credentials do not match our records.');
        }
    }

}
