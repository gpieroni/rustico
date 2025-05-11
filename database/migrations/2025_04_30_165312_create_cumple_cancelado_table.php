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
        Schema::create('cumple_cancelado', function (Blueprint $table) {
            $table->id();
            $table->integer('id_cumple');
            $table->foreign('id_cumple')
                ->references('id')
                ->on('cumple')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->integer('id_usuario');
            $table->foreign('id_usuario')
                ->references('id')
                ->on('users')
                ->onDelete('cascade')
                ->onUpdate('cascade');
            $table->date('fecha');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('cumple_cancelado');
    }
};
