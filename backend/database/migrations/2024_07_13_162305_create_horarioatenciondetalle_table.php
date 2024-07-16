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
            $table->id('IdHorarioatenciondetalle');
            $table->timestamps();
            $table->softDeletes();
            /** La definición de los campos que se usarán como claves foráneas */
            $table->unsignedBigInteger('medico_id');
            //$table->unsignedBigInteger('agenda_id');
            $table->unsignedBigInteger('horarioatencion_id');
            /** La declaración de las claves foráneas en los campos necesarios. */
            $table->foreign('medico_id')->references('IdMedico')->on('medico')->onDelete('cascade');;
           // $table->foreign('agenda_id')->references('IdAgenda')->on('agenda')->onDelete('cascade');;
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
