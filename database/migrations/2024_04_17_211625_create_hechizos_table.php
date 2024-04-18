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
        Schema::create('hechizos', function (Blueprint $table) {
            $table->id();
            $table->string('nombre');
            $table->foreignId('tipo1')->constrained('categorias');
            $table->foreignId('tipo2')->nullable()->constrained('categorias' );
            $table->text('efecto');
            $table->string('turnos');
            $table->string('coste');
            $table->timestamps();
            $table->unique(['tipo1', 'tipo2']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hechizos');
    }
};
