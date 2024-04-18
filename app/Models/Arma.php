<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Arma extends Model
{
    use HasFactory;
    public function personajes(){

        return $this->belongsToMany(Personaje::class, 'arma_personaje', 'personaje_id');

    }
}
