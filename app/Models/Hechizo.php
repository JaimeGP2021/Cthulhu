<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hechizo extends Model
{
    use HasFactory;
    public function personajes(){

        return $this->belongsToMany(Personaje::class, 'personaje_habilidad', 'personaje_id');

    }

    public function libros(){
        return $this->belongsToMany(Libro::class, 'hechizo_libro', 'libro_id');
    }

    public function categorias(){

        return $this-> belongsToMany(Categoria::class, 'categoria_hechizo');

    }
}
