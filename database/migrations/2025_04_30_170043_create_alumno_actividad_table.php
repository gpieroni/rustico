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
        Schema::create('alumno_actividad', function (Blueprint $table) {
            $table->id();
            $table->integer('id_alumno');
            $table->foreign('id_alumno')
                ->references('id')
                ->on('alumnos')
                ->onDelete('cascade');
            $table->integer('id_actividad');
            $table->foreign('id_actividad')
                ->references('id')
                ->on('actividades')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->tinyText('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('alumno_actividad');
    }
};
