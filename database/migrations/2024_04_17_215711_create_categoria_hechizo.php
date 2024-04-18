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
        Schema::create('categoria_hechizo', function (Blueprint $table) {
            $table->foreignId('categoria_id');
            $table->foreignId('hechizo_id');
            $table->primary(['categoria_id', 'hechizo_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('categoria_hechizo');
    }
};
