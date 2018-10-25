<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToAlunoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('aluno', function(Blueprint $table)
		{
			$table->foreign('TurmaId', 'aluno_ibfk_1')->references('Id')->on('turma')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('ClinicoId', 'aluno_ibfk_2')->references('Id')->on('clinico')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('VicioId', 'aluno_ibfk_3')->references('Id')->on('tipovicio')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('FamiliaId', 'aluno_ibfk_4')->references('Id')->on('familia')->onUpdate('RESTRICT')->onDelete('RESTRICT');
			$table->foreign('TipoCompulsaoId', 'aluno_ibfk_5')->references('Id')->on('tipocompulsao')->onUpdate('RESTRICT')->onDelete('RESTRICT');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('aluno', function(Blueprint $table)
		{
			$table->dropForeign('aluno_ibfk_1');
			$table->dropForeign('aluno_ibfk_2');
			$table->dropForeign('aluno_ibfk_3');
			$table->dropForeign('aluno_ibfk_4');
			$table->dropForeign('aluno_ibfk_5');
		});
	}

}
