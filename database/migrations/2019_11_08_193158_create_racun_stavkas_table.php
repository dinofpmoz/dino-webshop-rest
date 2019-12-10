<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateRacunStavkasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('racun_stavke', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('kolicina');
            $table->float('total');
            $table->unsignedInteger('artikl_id')->unsigned()->nullable();
            $table->unsignedInteger('racun_id')->unsigned()->nullable();
            $table->foreign('artikl_id')->references('id')->on('artikli');
            $table->foreign('racun_id')->references('id')->on('racuni');
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
        Schema::dropIfExists('racun_stavke');
    }
}
