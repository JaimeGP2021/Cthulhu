<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('personajes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('nombre');
            $table->string('nacionalidad');
            $table->integer('edad');
            $table->string('profesion');
            $table->string('titulacion');
            $table->integer('Ingresos');
            $table->integer('ahorros');
            $table->integer('efectivo');
            $table->integer('FUE');
            $table->integer('CON');
            $table->integer('DES');
            $table->integer('TAM');
            $table->integer('APA');
            $table->integer('INT');
            $table->integer('POD');
            $table->integer('EDU');
            $table->integer('COR');
            $table->integer('Cordura');
            $table->integer('HP');
            $table->integer('MP');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('personajes');
    }
};
