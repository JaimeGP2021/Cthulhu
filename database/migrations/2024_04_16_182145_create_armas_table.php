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
        Schema::create('armas', function (Blueprint $table) {
            $table->id();
            $table->string('tipo');
            $table->string('nombre');
            $table->string('damage');
            $table->integer('disparos_turno')->nullable();
            $table->integer('cargador')->nullable();
            $table->integer('alcance')->nullable();
            $table->string('epoca');
            $table->string('empala');
            $table->integer('peso');
            $table->string('tipo_municion')->nullable();
            $table->integer('resistencia');
            $table->boolean('arrojable');
            $table->boolean('puede_parar');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('armas');
    }
};
