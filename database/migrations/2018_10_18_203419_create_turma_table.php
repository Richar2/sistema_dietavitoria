<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateTurmaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('turma', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('nome', 225)->nullable();
			$table->integer('Lotacao');
			$table->time('Horario');
			$table->integer('DiaId');
			$table->boolean('Ativo', 1)->nullable()->default('b\'1\'');
			$table->boolean('excluido')->nullable()->default(0);
			$table->index(['Ativo','excluido'], 'idx_1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('turma');
	}

}
