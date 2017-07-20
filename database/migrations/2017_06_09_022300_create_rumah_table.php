<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateRumahTable extends Migration {

	public function up()
	{
		Schema::create('rumah', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->integer('no_lot');
			$table->string('type');
			$table->string('status');
			$table->integer('id_building')->unsigned();
		});
	}

	public function down()
	{
		Schema::dropIfExists('rumah');
	}
}