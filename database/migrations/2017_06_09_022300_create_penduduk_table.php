<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePendudukTable extends Migration {

	public function up()
	{
		Schema::create('penduduk', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('no_ic')->unique();
			$table->string('nama');
			$table->string('jantina');
			$table->tinyInteger('umur');
			$table->string('race');
			$table->string('religion');
			$table->string('status');
			$table->integer('id_rumah')->unsigned();
			$table->double('income');
			$table->integer('member');
		});
	}

	public function down()
	{
		Schema::dropIfExists('penduduk');
	}
}