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
        Schema::create('cumple', function (Blueprint $table) {
            $table->id();
            $table->date('fecha');
            $table->integer('id_cumple_lugar');
            $table->foreign('id_cumple_lugar')
                ->references('id')
                ->on('cumple_lugar')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->string('nombre');
            $table->string('telefono');
            $table->string('comentario');
            $table->integer('valor');
            $table->integer('id_usuario');
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cumple');
    }
};
