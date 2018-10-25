<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipovicioTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipovicio', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->boolean('hasTabagismo', 1);
			$table->boolean('hasAlcool', 1);
			$table->boolean('hasOutros', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipovicio');
	}

}
