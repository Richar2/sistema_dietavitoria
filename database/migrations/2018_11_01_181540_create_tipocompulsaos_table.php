<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTipocompulsaosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tipocompulsaos', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->boolean('hasCompulsaoDoce', 1);
			$table->boolean('hasCompulsaoSalgado', 1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('tipocompulsaos');
	}

}
