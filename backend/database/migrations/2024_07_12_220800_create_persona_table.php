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
        Schema::create('persona', function (Blueprint $table) {
            $table->id('id');
            $table->string('identificacion');
            $table->string('tipo_id');
            $table->string('nombres');
            $table->string('apellidos');
            $table->string('genero');
            $table->string('telefono');
            $table->string('direccion');
            $table->string('correo');
            $table->string('grupo_sanguineo');
            $table->string('titulo');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('persona');
    }
};
