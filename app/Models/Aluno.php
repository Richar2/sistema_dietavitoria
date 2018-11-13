<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $primaryKey = 'Id';
    protected $fillable=[
        'nome',
        'sobrenome',
        'Cpf',
        'DataNascimento',
        'Email',
        'Altura',
        'Telefone',
        'endereco',
        'DataCadastro',
        'DataAtualizacao',
        'Numero',
        'Cep' , 
        'bairro',
        'complemento',
        'userfacebook',  
        'QuantidadeFilhos',  
        'hasCompulsao',
        'hasVicio',
        'ConsistenciaFecalId', 
        'obs',
        'Celular',
        'AtivoId',
        'PesoIdeal',
        'Peso',
        'Cintura',
        'Coxa',
        'Quadril',
        'DataPrimeiraAula',
        'profissao',
        'sexo',
        'cidade',
        'star',
        'gold_medal',
        'silver_medal',
        'excluido',
        'NivelDeAtividade'
        ];
    




    public function familia()
    {
        
        return $this->belongsTo(Familia::class, 'FamiliaId', 'Id');
    }
    public function clinico()
    {
        
        return $this->belongsTo(Clinico::class, 'ClinicoId', 'Id');
    }
     public function tipocompulsao()
    {
       
        return $this->belongsTo(Tipo_compulsao::class, 'TipoCompulsaoId', 'Id');
    }
     public function tipovicio()
    {
        
        return $this->belongsTo(Tipo_vicio::class, 'VicioId', 'Id');
    }
     public function turma()
    {
        
        return $this->belongsTo(Turma::class, 'TurmaId', 'Id');
    }
     
    
    
    
}
