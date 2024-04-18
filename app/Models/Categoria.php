<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categoria extends Model
{
    use HasFactory;

    public function hechizos(){

        return $this-> belongsToMany(Hechizo::class, 'categoria_hechizo');

    }
}
