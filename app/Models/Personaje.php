<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personaje extends Model
{
    use HasFactory;

    public function user(){

        return $this->belongsTo(User::class);

    }

    public function objetos()
    {
        return $this->belongsToMany(Objeto::class, 'objeto_personaje')->withPivot('cantidad');
    }

    public function habilidades()
    {
        return $this->belongsToMany(Habilidad::class, 'habilidad_personaje')->withPivot('probabilidad');
    }

    public function hechizos()
    {
        return $this->belongsToMany(Hechizo::class, 'hechizo_personaje')->withPivot('probabilidad');
    }

    public function armas()
    {
        return $this->belongsToMany(Arma::class, 'arma_personaje')->withPivot('probabilidad');
    }

}
