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
        Schema::create('instructores_disciplinas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("id_instructor");
            $table->unsignedBigInteger("id_disciplina");
            $table->foreign("id_instructor")->references("id")->on("usuarios")->onDelete("cascade");
            $table->foreign("id_disciplina")->references("id_disciplina")->on("disciplinas")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('instructores_disciplinas');
    }
};
