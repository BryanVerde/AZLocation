<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Localizado extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('localizados', function (Blueprint $table) {
            $table->bigInteger('localizadoid')->unsigned();
            $table->foreign('localizadoid')->references('id')->on('users');
            $table->string('name');
            $table->string('address')->nullable();
            $table->string('long')->nullable();
            $table->string('lat')->nullable();
            $table->string('phone');
            $table->string('username')->unique();
            $table->string('password');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('localizado');
    }
}
