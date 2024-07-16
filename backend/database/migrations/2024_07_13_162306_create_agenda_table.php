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
        Schema::create('agenda', function (Blueprint $table) {
            $table->id('IdAgenda');
            $table->date('Fecha');
            $table->unsignedBigInteger('IdHorarioAtencionDetalle');
            $table->timestamps();
            $table->softDeletes();
            $table->foreign('IdHorarioAtencionDetalle')->references('IdHorarioatenciondetalle')
                ->on('horarioatenciondetalle')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('agenda');
    }
};
