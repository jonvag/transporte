<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Passenger;
use App\Models\Bus;

class Ruta extends Model
{
    use HasFactory;

    /* realacion uno a muchos inversa */

    public function user(){
        return $this->belongsTo(User::class);
    }

    /* relacion de uno a muchos */
    public function passengers(){
        return $this->hasMany(Passenger::class);

    }

    /* Relacion muchos a muchos */

    public function buses(){
        return $this->belongsToMany(Bus::class);
    }

}
 