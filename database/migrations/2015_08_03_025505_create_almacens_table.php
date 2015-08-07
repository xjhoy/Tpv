<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlmacensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('almacens', function (Blueprint $table) {

            $table->increments('id');
            $table->string('nomProd');
            $table->integer('uniProd');
            $table->float('precioProd');
            $table->integer('ivaProd');
            $table->float('netoProd');
            $table->integer('idMProd');
            $table->string('favProd');
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
        Schema::drop('almacens');
    }
}
