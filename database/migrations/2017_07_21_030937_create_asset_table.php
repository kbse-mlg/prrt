<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssetTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('asset', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('penduduk_id')->unsigned();
            $table->foreign('penduduk_id')->references('id')->on('penduduk')->onDelete('cascade');
            $table->string('asset',500);
            $table->double('price');
            $table->string('alamat',500)->nullable();
            $table->float('latitude')->nullable();
            $table->float('longitude')->nullable();
            $table->integer('year');
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
        
        Schema::dropIfExists('asset');
    }
}
