<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuildingTable extends Migration {

	public function up()
	{
		Schema::create('building', function(Blueprint $table) {
			$table->increments('id');
			$table->string('nama', 500);
			$table->string('jenis', 50);
			$table->string('alamat', 500);
			$table->float('latitude');
			$table->float('longitude');
			$table->text('geojson');
		});
	}

	public function down()
	{
		Schema::drop('Building');
	}
}