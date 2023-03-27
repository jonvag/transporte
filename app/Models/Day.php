<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Passenger;

class Day extends Model
{
    use HasFactory;

    /* realacion uno a muchos inversa */

    public function passengers(){
        return $this->belongsTo(Passenger::class);
    }
}
