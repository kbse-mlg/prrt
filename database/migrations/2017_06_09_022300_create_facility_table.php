<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFacilityTable extends Migration {

	public function up()
	{
		Schema::create('facility', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('id_building')->unsigned();
			$table->string('Nama');
			$table->string('condition');
			$table->string('tahun');
			$table->decimal('harga')->default('0');
		});
	}

	public function down()
	{
		Schema::dropIfExists('facility');
	}
}