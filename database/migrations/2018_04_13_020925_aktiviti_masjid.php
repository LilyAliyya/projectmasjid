<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AktivitiMasjid extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aktiviti_masjid', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tarikh_aktiviti');
            $table->text('nama_aktiviti');
            $table->string('masa_aktiviti');
            $table->string('tempat_aktiviti');
            $table->string('gambar_aktiviti');
            $table->longtext('desc_aktiviti');
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
        Schema::dropIfExists('aktiviti_masjid');
    }
}
