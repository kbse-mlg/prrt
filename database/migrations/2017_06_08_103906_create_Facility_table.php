<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacilityTable extends Migration {

	public function up()
	{
		Schema::create('Facility', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_building')->unsigned();
			$table->string('Nama');
			$table->string('jenis');
			$table->string('condition');
			$table->string('tahun');
			$table->string('harga');
		});
	}

	public function down()
	{
		Schema::drop('Facility');
	}
}