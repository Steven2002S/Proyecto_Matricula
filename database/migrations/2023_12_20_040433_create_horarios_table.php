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
        Schema::create('horarios', function (Blueprint $table) {
            $table->id();
            $table->string('dia_semana', 200);
            $table->time('hora_inicio');
            $table->time('hora_fin');
            $table->unsignedBigInteger('materia_id');
            $table->unsignedBigInteger('docente_id');
            //////////////////////////////////////////
            $table->foreign('materia_id')->references('id')->on('Materias');
            $table->foreign('docente_id')->references('id')->on('Docentes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('horarios');
    }
};
