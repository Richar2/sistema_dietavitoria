<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreatePagamentoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('pagamento', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('aluno_id')->nullable();
			$table->integer('tipo_pagamento')->nullable();
			$table->date('data')->nullable();
			$table->dateTime('data_insert')->nullable();
			$table->decimal('valor', 5)->nullable();
			$table->boolean('excluido')->nullable()->default(0);
			$table->string('obs', 225)->nullable();
			$table->index(['aluno_id','excluido','id'], 'idx_1');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('pagamento');
	}

}
