<?php

use Jenssegers\Mongodb\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettingsTable extends Migration {
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up() {
		Schema::create('ticketit_settings', function (Blueprint $table) {
			$table->increments('id');
			$table->string('lang')->unique()->nullable();
			$table->string('slug');
			$table->string('value');
			$table->string('default');
			$table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down() {
		Schema::drop('ticketit_settings');
	}
}
