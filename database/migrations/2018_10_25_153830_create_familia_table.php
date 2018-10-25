<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFamiliaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('familia', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->boolean('hasObesidade', 1);
			$table->boolean('hasDoencaRenal', 1);
			$table->boolean('hasHipertensao', 1);
			$table->boolean('hasColesterolGorduraFigado', 1);
			$table->boolean('hasHipotiroidismo', 1);
			$table->boolean('hasAlteracaoGlicerides', 1);
			$table->boolean('hasBulimia', 1);
			$table->boolean('hasCompulsaoAlimentar', 1);
			$table->boolean('hasIntoleranciaLactose', 1);
			$table->boolean('hasIntoleranciaGluten', 1);
			$table->boolean('hasVicios', 1);
			$table->string('obs', 225)->nullable();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('familia');
	}

}
