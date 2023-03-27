<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ruta;

class Bus extends Model
{
    use HasFactory;
    /* Relacion muchos a muchos */

    public function rutas(){
        return $this->belongsToMany(Ruta::class);
    }

    /* relacioh uno a uno polimorfica */
    public function image(){
        return $this->morphOne(Image::class, 'imageable');
    }
}
