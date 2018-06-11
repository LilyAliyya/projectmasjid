<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class KuliahHarian extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kuliah_harian', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tarikh_kuliah');
            $table->string('tajuk_kuliah');
            $table->string('gambar_kuliah');
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
        Schema::dropIfExists('kuliah_harian');
    }
}
