<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Libro extends Model
{
    use HasFactory;

    protected $fillable = ['titulo', 'idioma', 'descripcion', 'coste_cordura', 'coste_tiempo'];

    public function hechizos()
    {
        return $this->belongsToMany(Hechizo::class, 'hechizo_libro')->withPivot('tipo');
    }

}
