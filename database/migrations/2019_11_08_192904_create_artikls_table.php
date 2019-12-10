<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArtiklsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('artikli', function (Blueprint $table) {
            $table->increments('id');
            $table->string('naziv');
            $table->text('opis');
            $table->float('cijena');
            $table->integer('stanje');
            $table->string('img_path')->nullable();
            $table->integer('kategorija_id')->unsigned()->nullable();
            $table->foreign('kategorija_id')->references('id')->on('kategorije');
            $table->integer('user_id')->unsigned()->nullable();
            $table->foreign('user_id')->references('id')->on('users');
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
        Schema::dropIfExists('artikli');
    }
}
