<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TukangBersih extends Model
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
