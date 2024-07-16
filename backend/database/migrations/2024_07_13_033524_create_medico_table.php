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
            $table->id();
            $table->string('Especialidad');
            $table->string('Subespecialidad');
            $table->string('NumeroCarnet');
            $table->timestamps();
            $table->foreignIdFor(\App\Models\Persona::class)->constrained("persona");
            $table->foreignIdFor(\App\Models\Consultorio::class)->constrained("consultorio");
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
