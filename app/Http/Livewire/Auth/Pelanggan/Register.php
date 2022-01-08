<?php

namespace App\Http\Livewire\Auth\Pelanggan;

use Livewire\Component;

class Register extends Component
{
    public $userCreate;

    public function render()
    {
        return view('livewire.auth.pelanggan.register');
    }

    public function register()
    {

        $this->validate(
            [
                'userCreate.name' => ['required', 'string', 'max:255'],
                'userCreate.email' => ['required', 'string', 'email', 'max:255'],
                'userCreate.password' => ['required', 'string', 'min:8', 'confirmed'],
            ],
            [],
            [
                'userCreate.name' => 'Name',
                'userCreate.email' => 'Email Address',
                'userCreate.password' => 'Password',
            ]
        );

        try {
            DB::beginTransaction();

            event(new Registered($user = $this->create()));

            $this->guard()->login($user);

            DB::commit();
            return redirect()->route('home');

        } catch (\Throwable $th) {
            DB::rollback();
            $this->reportError($th->getMessage());
        }
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard();
    }

    protected function create()
    {
        $this->userCreate['username'] = $this->userCreate['profile']['no_pengenalan'];
        $this->userCreate['password'] = bcrypt($this->userCreate['username']);

        $profile = UserAwam::create($this->userCreate['profile']);
        $profile->user()->create($this->userCreate);
        $user = $profile->user;

        $role = Role::where('name', RolesEnum::Pelanggan)->first();
        $user->attachRole($role->id);
        return $profile->user;
    }
}
