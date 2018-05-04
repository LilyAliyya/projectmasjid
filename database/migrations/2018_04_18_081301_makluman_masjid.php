<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MaklumanMasjid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('makluman_masjid', function (Blueprint $table) {
            $table->increments('id');
            $table->text('tajuk_makluman');
            $table->string('tarikh_makluman');
            $table->longtext('isi_makluman');
            $table->string('image_makluman');
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
        Schema::dropIfExists('makluman_masjid');
    }
}
