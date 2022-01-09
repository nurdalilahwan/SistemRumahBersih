<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;

class Pelanggan extends Authenticatable
{
    use HasFactory;

    protected $fillable =[
        'nama_penuh',
        'name',
        'email',
        'no_telefon',
        'alamat',
        'password',
    ];
}
