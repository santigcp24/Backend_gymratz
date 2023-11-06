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
        Schema::create('reservas_clases', function (Blueprint $table) {
            $table->id("id_reserva");
            $table->unsignedBigInteger("id_miembro");
            $table->unsignedBigInteger("id_clase");
            $table->foreign("id_miembro")->references("id")->on("usuarios")->onDelete("cascade");
            $table->foreign("id_clase")->references("id_clase")->on("clases")->onDelete("cascade");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservas_clases');
    }
};
