<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class LaporanAktiviti extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('laporan_aktiviti', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tarikh_laporan');
            $table->string('tajuk_laporan');
            $table->longtext('isi_laporan');
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
        Schema::dropIfExists('laporan_aktiviti');
    }
}
