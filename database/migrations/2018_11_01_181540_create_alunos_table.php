<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAlunosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alunos', function(Blueprint $table)
		{
			$table->integer('Id', true);
			$table->string('nome', 225)->nullable();
			$table->string('sobrenome', 225)->nullable();
			$table->string('Cpf', 225)->nullable();
			$table->date('DataNascimento')->nullable();
			$table->string('Email', 225)->nullable();
			$table->decimal('Altura', 3)->nullable();
			$table->string('Telefone', 225)->nullable();
			$table->integer('TurmaId')->nullable()->index('TurmaId');
			$table->string('endereco', 225)->nullable();
			$table->dateTime('DataCadastro')->nullable();
			$table->dateTime('DataAtualizacao')->nullable();
			$table->string('Numero', 225)->nullable();
			$table->string('Cep', 225)->nullable();
			$table->string('bairro', 225)->nullable();
			$table->string('complemento', 225)->nullable();
			$table->string('userfacebook', 225)->nullable();
			$table->integer('QuantidadeFilhos')->nullable();
			$table->string('HorarioMaiorApetite', 225)->nullable();
			$table->boolean('MenstruacaoIrregular', 1)->nullable();
			$table->integer('ClinicoId')->nullable()->index('ClinicoId');
			$table->boolean('hasCompulsao', 1)->nullable();
			$table->boolean('hasVicio', 1)->nullable();
			$table->integer('VicioId')->nullable()->index('VicioId');
			$table->integer('ConsistenciaFecalId')->nullable();
			$table->integer('TipoCompulsaoId')->nullable()->index('TipoCompulsaoId');
			$table->integer('FamiliaId')->nullable()->index('FamiliaId');
			$table->string('obs', 225)->nullable();
			$table->string('Celular', 225)->nullable();
			$table->integer('AtivoId')->nullable();
			$table->decimal('PesoIdeal', 5)->nullable();
			$table->decimal('Peso', 5)->nullable();
			$table->decimal('Cintura', 5)->nullable();
			$table->decimal('Coxa', 5)->nullable();
			$table->decimal('Quadril', 5)->nullable();
			$table->date('DataPrimeiraAula')->nullable();
			$table->string('profissao', 225)->nullable();
			$table->string('sexo', 225)->nullable()->default('f');
			$table->string('cidade', 225)->nullable();
			$table->boolean('star')->nullable()->default(0);
			$table->boolean('gold_medal')->nullable()->default(0);
			$table->boolean('silver_medal')->nullable()->default(0);
			$table->boolean('excluido')->nullable()->default(0)->index('idx_1');
			$table->boolean('NivelDeAtividade')->nullable()->default(0);
			$table->index(['AtivoId','excluido'], 'idx_2');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('alunos');
	}

}
