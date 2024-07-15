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
            $table->id('IdMedico');
            $table->string('Especialidad');
            $table->string('Subespecialidad');
            $table->string('NumeroCarnet');
            $table->unsignedBigInteger('IdPersona');
            $table->unsignedBigInteger('IdConsultorio');
            $table->timestamps();        
            
            $table->foreign('IdPersona')->references('IdPersona')->on('persona')->onDelete('cascade');
            $table->foreign('IdConsultorio')->references('IdConsultorio')->on('consultorio')->onDelete('cascade');
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
