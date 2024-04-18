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
            $table->foreignId('user_id')->constrained('users')->onDelete('cascade');
            $table->string('nombre');
            $table->string('profesion');
            $table->integer('edad');
            $table->string('nacionalidad');
            $table->string('estudios');
            $table->integer('fue');
            $table->integer('con');
            $table->integer('des');
            $table->integer('tam');
            $table->integer('apa');
            $table->integer('int');
            $table->integer('pod');
            $table->integer('edu');
            $table->integer('cor');
            $table->integer('cordura');
            $table->integer('ingresos');
            $table->integer('ahorros');
            $table->integer('efectivo');
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
