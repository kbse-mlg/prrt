<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('Facility', function(Blueprint $table) {
			$table->foreign('id_building')->references('id')->on('Building')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('rumah', function(Blueprint $table) {
			$table->foreign('id_building')->references('id')->on('Building')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
		Schema::table('penduduk', function(Blueprint $table) {
			$table->foreign('id_rumah')->references('id')->on('rumah')
						->onDelete('restrict')
						->onUpdate('restrict');
		});
	}

	public function down()
	{
		Schema::table('Facility', function(Blueprint $table) {
			$table->dropForeign('Facility_id_building_foreign');
		});
		Schema::table('rumah', function(Blueprint $table) {
			$table->dropForeign('rumah_id_building_foreign');
		});
		Schema::table('penduduk', function(Blueprint $table) {
			$table->dropForeign('penduduk_id_rumah_foreign');
		});
	}
}