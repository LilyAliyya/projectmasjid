<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JawatankuasaMasjid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jawatankuasa_masjid', function (Blueprint $table) {
            $table->increments('id');
            $table->string('gambar_ahli');
            $table->string('nama_ahli');
            $table->string('nama_jawatankuasa');
            $table->integer('coordinate');
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
        Schema::dropIfExists('jawatankuasa_masjid');
    }
}
