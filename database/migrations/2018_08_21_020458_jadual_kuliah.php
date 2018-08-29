<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class JadualKuliah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jadual_kuliah', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tarikh_kuliah');
            $table->text('nama_kuliah');
            $table->string('masa_kuliah', 100);
            $table->string('tempat_kuliah', 100);
            $table->string('gambar_kuliah');
            $table->longtext('desc_kuliah');
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
        Schema::dropIfExists('jadual_kuliah');
    }
}
