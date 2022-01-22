<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Perkhidmatan extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_tukang_bersih',
        'tajuk',
        'penerangan',
        'ketersediaan_lokasi',
        'status'
    ];

    public function tempahan()
    {
        return $this->hasOne(Tempahan::class,'id_perkhidmatan');
    }

    public function tukangBersih()
    {
        return $this->belongsTo(User::class,'id_tukang_bersih');
    }

}
