<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class VideoKhutbah extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('video_khutbah', function (Blueprint $table) {
            $table->increments('id');
            $table->date('tarikh_khutbah');
            $table->string('tajuk_khutbah');
            $table->longtext('isi_video');
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
        Schema::dropIfExists('video_khutbah');
    }
}
