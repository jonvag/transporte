<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Passenger;

class Recogida extends Model
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

}
 