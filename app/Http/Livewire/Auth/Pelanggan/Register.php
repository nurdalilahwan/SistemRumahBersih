<?php

namespace App\Http\Livewire\Auth\Pelanggan;

use Livewire\Component;
use App\Models\Pelanggan;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class Register extends Component
{
    public $daftarPelanggan;

    protected $listeners = [
        'alert',
    ];

    public function render()
    {
        return view('livewire.auth.pelanggan.register');
    }

    public function register()
    {

        $this->validate(
            [
                'daftarPelanggan.nama_penuh' => ['required'],
                'daftarPelanggan.name' => ['required'],
                'daftarPelanggan.email' => ['required', 'string', 'email'],
                'daftarPelanggan.no_pengenalan' => ['required'],
                'daftarPelanggan.password' => ['required', 'string', 'min:8'],
                'daftarPelanggan.no_telefon' => ['required'],
            ],
            [],
            [
                'daftarPelanggan.nama_penuh' => 'Nama Penuh',
                'daftarPelanggan.name' => 'Nama Pengguna',
                'daftarPelanggan.email' => 'Email',
                'daftarPelanggan.no_pengenalan' => 'No. Kad Pengenalan',
                'daftarPelanggan.password' => 'Kata Laluan',
                'daftarPelanggan.no_telefon' => 'No. Telefon'
            ]
        );

        try {
            DB::beginTransaction();

            $this->daftarPelanggan['password'] = bcrypt($this->daftarPelanggan['password']);
            $this->daftarPelanggan['user_type'] = "Pelanggan";
            // $pelanggan = Pelanggan::create($this->daftarPelanggan);
            $user = User::create($this->daftarPelanggan);
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
