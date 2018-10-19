<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAcompanhamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('acompanhamento', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->decimal('Peso', 5)->nullable();
			$table->decimal('Diff', 5)->nullable();
			$table->decimal('Cintura', 5)->nullable();
			$table->decimal('DiffCintura', 5)->nullable();
			$table->string('TotalCintura', 45)->nullable();
			$table->decimal('Coxa', 5)->nullable();
			$table->decimal('DiffCoxa', 5)->nullable();
			$table->string('TotalCoxa', 45)->nullable();
			$table->decimal('Quadril', 5)->nullable();
			$table->decimal('DiffQuadril', 5)->nullable();
			$table->string('TotalQuadril', 45)->nullable();
			$table->date('Data')->nullable();
			$table->integer('AlunoId')->nullable();
			$table->string('Total', 45)->nullable();
			$table->boolean('Star')->nullable()->default(0);
			$table->boolean('Gold_medal')->nullable()->default(0);
			$table->boolean('Silver_medal')->nullable()->default(0);
			$table->boolean('excluido')->nullable()->default(0)->index('idx_1');
			$table->decimal('get', 10)->nullable();
			$table->decimal('geb', 10)->nullable();
			$table->index(['Silver_medal','excluido'], 'idx_2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('acompanhamento');
	}

}
