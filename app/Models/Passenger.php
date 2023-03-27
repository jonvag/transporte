<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Ruta;
use App\Models\Day;
use App\Models\Recogida;
use App\Models\Llegada;

class Passenger extends Model
{
    use HasFactory;

    /* realacion uno a muchos inversa */

    public function rutas(){
        return $this->belongsTo(Ruta::class);
    }

    /* relacion de uno a muchos */
    public function days(){
        return $this->hasMany(Day::class);

    }

    /* realacion uno a muchos inversa */

    public function recogidas(){
        return $this->belongsTo(Recogida::class);
    }

    /* realacion uno a muchos inversa */

    public function llegadas(){
        return $this->belongsTo(Llegada::class);
    }
}
