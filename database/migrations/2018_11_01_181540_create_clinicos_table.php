<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateClinicosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('clinicos', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->boolean('hasAnsiedade', 1);
			$table->boolean('hasInsonia', 1);
			$table->boolean('hasHipertensao', 1);
			$table->boolean('hasDiabetes', 1);
			$table->boolean('hasAlergias', 1);
			$table->boolean('hasDisturbiosOncologicos', 1);
			$table->boolean('hasProblemasRenais', 1);
			$table->boolean('hasMenopausa', 1);
			$table->boolean('hasHipotiroidismo', 1);
			$table->boolean('hasColesterol', 1);
			$table->boolean('hasFigado', 1);
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
		Schema::drop('clinicos');
	}

}
