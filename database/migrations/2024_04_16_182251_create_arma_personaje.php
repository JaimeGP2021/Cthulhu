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
        Schema::create('arma_personaje', function (Blueprint $table) {
            $table->foreignId('personaje_id');
            $table->foreignId('arma_id');
            $table->integer('probabilidad');
            $table->primary(['personaje_id', 'arma_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('arma_personaje');
    }
};
