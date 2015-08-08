<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProvsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('provs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nomContacto');
            $table->string('razonSocial');
            $table->integer('telfProv');
            $table->string('provProv');
            $table->string('locProv');
            $table->string('dirProv');
            $table->integer('cpProv');
            $table->string('emailProv');
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
        Schema::drop('provs');
    }
}
