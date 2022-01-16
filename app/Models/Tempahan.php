<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Tempahan extends Model
{
    use HasFactory;

    protected $fillable =[
        'id_pelanggan',
        'id_perkhidmatan',
        'tarikh'
    ];

    public function getTarikhAttribute($value)
    {
        return Carbon::createFromFormat('Y-m-d',$value)->format('d/m/Y');
    }

    public function setTarikhAttribute($value)
    {
        return $value ? $this->attributes['tarikh'] = Carbon::createFromFormat('d/m/Y',$value)->format('Y-m-d'):NULL;
    }

}
