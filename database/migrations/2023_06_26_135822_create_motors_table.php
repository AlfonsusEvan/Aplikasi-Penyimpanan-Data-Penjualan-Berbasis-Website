<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMotorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('motors', function (Blueprint $table) {
            $table->id();
            $table->string('image');
            $table->string('name');
            $table->integer('tahun');
            $table->string('no_polisi');
            $table->date('tgl_pembelian');
            $table->string('status');
            $table->date('tgl_terjual');
            $table->integer('modal');
            $table->integer('hrg_jual');
            $table->integer('keuntungan');
            $table->string('deskripsi');
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
        Schema::dropIfExists('motors');
    }
}
