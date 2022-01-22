<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pelanggan extends Model
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

    public function tempahan()
    {
        return $this->hasOne(Tempahan::class,'id_pelanggan');
    }
}
