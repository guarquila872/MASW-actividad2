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
        Schema::create('medico', function (Blueprint $table) {
            $table->increments('IdMedico');
            $table->string('Especialidad');
            $table->string('Subespecialidad');
            $table->string('NumeroCarnet');
            $table->string('IdPersona');
            $table->string('IdConsultorio');
            $table->timestamps();
            $table->softDeletes();
            /** La definición de los campos que se usarán como claves foráneas */
            $table->integer('IdPersona')->unsigned();
            $table->integer('IdConsultorio')->unsigned();
            /** La declaración de las claves foráneas en los campos necesarios. */
            $table->foreign('IdPersona')->references('IdPersona')->on('persona');
            $table->foreign('IdConsultorio')->references('IdConsultorio')->on('consultorio');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medico');
    }
};
