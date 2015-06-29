<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSolicitudesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('solicitudes', function(Blueprint $table) {
			$table->increments('id');
			$table->string('dato1', 300);
			$table->string('dato2', 300)->nullable();
			$table->string('dato3', 300)->nullable();
			$table->string('dato4', 300)->nullable();
			$table->string('dato5', 300)->nullable();
			$table->string('dato6', 300)->nullable();
			$table->string('dato7', 300)->nullable();
			$table->string('dato8', 300)->nullable();
			$table->string('dato9', 300)->nullable();
			$table->string('dato10', 300)->nullable();
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
		Schema::drop('solicitudes');
	}

}
