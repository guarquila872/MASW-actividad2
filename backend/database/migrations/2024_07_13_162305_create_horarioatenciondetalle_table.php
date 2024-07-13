<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('horarioatenciondetalle', function (Blueprint $table) {
            $table->increments('IdHorarioatenciondet');
            $table->timestamps();
            $table->softDeletes();
            /** La definición de los campos que se usarán como claves foráneas */
            $table->integer('medico_id')->unsigned();
            $table->integer('agenda_id')->unsigned();
            $table->integer('horarioatencion_id')->unsigned();
            /** La declaración de las claves foráneas en los campos necesarios. */
            $table->foreign('medico_id')->references('IdMedico')->on('medico');
            $table->foreign('agenda_id')->references('IdAgenda')->on('agenda');
            $table->foreign('horarioatencion_id')->references('IdHorarioatencion')->on('horarioatencion');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarioatenciondetalle');
    }
};
