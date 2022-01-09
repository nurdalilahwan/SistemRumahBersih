<?php

namespace App\Http\Livewire\Auth\TukangBersih;

use Livewire\Component;
use App\Models\TukangBersih;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $daftarTukangBersih;

    protected $listeners = [
        'alert',
    ];

    public function render()
    {
        return view('livewire.auth.tukang-bersih.register');
    }

    public function register()
    {

        $this->validate(
            [
                'daftarTukangBersih.nama_penuh' => ['required'],
                'daftarTukangBersih.name' => ['required'],
                'daftarTukangBersih.email' => ['required', 'string', 'email'],
                'daftarTukangBersih.no_pengenalan' => ['required'],
                'daftarTukangBersih.password' => ['required', 'string', 'min:8'],
                'daftarTukangBersih.no_telefon' => ['required'],
            ],
            [],
            [
                'daftarTukangBersih.nama_penuh' => 'Nama Penuh',
                'daftarTukangBersih.name' => 'Nama Pengguna',
                'daftarTukangBersih.email' => 'Email',
                'daftarTukangBersih.no_pengenalan' => 'No. Kad Pengenalan',
                'daftarTukangBersih.password' => 'Kata Laluan',
                'daftarTukangBersih.no_telefon' => 'No. Telefon'
            ]
        );

        try {
            DB::beginTransaction();

            $this->daftarTukangBersih['password'] = bcrypt($this->daftarTukangBersih['password']);
            $this->daftarTukangBersih['user_type'] = "Tukang Bersih";
            $tukangBersih = TukangBersih::create($this->daftarTukangBersih);
            $user = User::create($this->daftarTukangBersih);
            $this->guard()->login($user);

            DB::commit();
            return redirect()->route('home');

        } catch (\Throwable $th) {
            DB::rollback();
            dd($th);
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
}
