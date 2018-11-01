<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSysLogsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('sys_logs', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('action')->nullable();
			$table->dateTime('date_log')->nullable();
			$table->text('obs', 65535)->nullable();
			$table->string('table_name', 225)->nullable();
			$table->integer('row_id')->nullable();
			$table->string('page', 225)->nullable();
			$table->integer('aluno_id')->nullable();
			$table->boolean('success')->nullable()->default(1);
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('sys_logs');
	}

}
