<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlunosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('alunos', function(Blueprint $table)
		{
			$table->foreign('TurmaId', 'alunos_ibfk_1')->references('Id')->on('turmas')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ClinicoId', 'alunos_ibfk_2')->references('Id')->on('clinicos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('VicioId', 'alunos_ibfk_3')->references('Id')->on('tipovicios')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('FamiliaId', 'alunos_ibfk_4')->references('Id')->on('familias')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('TipoCompulsaoId', 'alunos_ibfk_5')->references('Id')->on('tipocompulsaos')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('alunos', function(Blueprint $table)
		{
			$table->dropForeign('alunos_ibfk_1');
			$table->dropForeign('alunos_ibfk_2');
			$table->dropForeign('alunos_ibfk_3');
			$table->dropForeign('alunos_ibfk_4');
			$table->dropForeign('alunos_ibfk_5');
		});
	}

}
