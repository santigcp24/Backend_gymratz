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
        Schema::create('clases', function (Blueprint $table) {
            $table->id("id_clase");
            $table->date("fecha_clase");
            $table->dateTime("hora_inicio");
            $table->dateTime("hora_fin");
            $table->unsignedBigInteger("id_instructor");
            $table->unsignedBigInteger("id_disciplina");
            $table->unsignedBigInteger("id_salon");
            $table->foreign("id_instructor")->references("id")->on("usuarios")->onDelete("cascade");
            $table->foreign("id_disciplina")->references("id_disciplina")->on("disciplinas")->onDelete("cascade");
            $table->foreign("id_salon")->references("id_salon")->on("salones")->onDelete("cascade");
            
            $table->timestamps();

            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clases');
    }
};
