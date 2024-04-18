<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Habilidad extends Model
{
    use HasFactory;

    protected $table = 'habilidades';

    public function personajes(){

        return $this->belongsToMany(Personaje::class, 'habilidad_personaje', 'personaje_id');

    }
}
