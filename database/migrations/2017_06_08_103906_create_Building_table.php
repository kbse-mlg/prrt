<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBuildingTable extends Migration {

	public function up()
	{
		Schema::create('Building', function(Blueprint $table) {
			$table->integer('id', true);
			$table->string('nama_bangun', 500);
			$table->string('jenis', 50);
			$table->string('alamat', 500);
			$table->float('latitude');
			$table->float('longitude');
			$table->string('geojson', 500);
		});
	}

	public function down()
	{
		Schema::drop('Building');
	}
}