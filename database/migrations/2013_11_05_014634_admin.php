<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Admin extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admin', function (Blueprint $table){
            $table->id('id_admin');
            $table->unsignedBigInteger('id_profile');
            $table->string('admin_name');
            $table->string('admin_lastname');
            $table->string('admin_email');
            $table->string('admin_phone');
            $table->string('admin_user');
            $table->string('admin_password');

            $table-> timestamps();

            $table->foreign('id_profile')->references('id')->on('profiles');
        });
    }

    
    public function down()
    {
        Schema::dropIfExists('admin');
    }
}
