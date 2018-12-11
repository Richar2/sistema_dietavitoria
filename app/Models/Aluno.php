<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
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
    

    protected $hidden = ['Peso','Coxa'  , 'Cintura' , 'PesoIdeal','Altura','Quadril'];
    //replaces
   
    public function setPesoAttribute($value)
    {
        $this->attributes['Peso'] = str_replace(",", ".", $value);
    }
    public function getPesoAttribute($value)
    {
       return  $this->attributes['Peso'] = str_replace(".", ",", $value);
    }
    public function setCoxaAttribute($value)
    {
        $this->attributes['Coxa'] = str_replace(",", ".", $value);
    }
    public function getCoxaAttribute($value)
    {
       return  $this->attributes['Coxa'] = str_replace(".", ",", $value);
    }
    public function setCinturaAttribute($value)
    {
        $this->attributes['Cintura'] = str_replace(",", ".", $value);
    }
    public function getCinturaAttribute($value)
    {
       return  $this->attributes['Cintura'] = str_replace(".", ",", $value);
    }
    public function setPesoIdealAttribute($value)
    {
        $this->attributes['PesoIdeal'] = str_replace(",", ".", $value);
    }
    public function getPesoIdealAttribute($value)
    {
       return  $this->attributes['PesoIdeal'] = str_replace(".", ",", $value);
    }
    public function setAlturaAttribute($value)
    {
        $this->attributes['Altura'] = str_replace(",", ".", $value);
    }
    public function getAlturaAttribute($value)
    {
       return  $this->attributes['Altura'] = str_replace(".", ",", $value);
    }
    public function setQuadrilAttribute($value)
    {
        $this->attributes['Quadril'] = str_replace(",", ".", $value);
    }
    public function getQuadrilAttribute($value)
    {
       return  $this->attributes['Quadril'] = str_replace(".", ",", $value);
    }
 
    protected $dates = [
        'DataCadastro',
        'DataAtualizacao',
        'DataNascimento',
        'DataPrimeiraAula'
    ];
    










   
    //relacionamentos    
    public function familia()
    {
        
        return $this->belongsTo(Familia::class );
    }
    public function clinico()
    {
        
        return $this->belongsTo(Clinico::class);
    }
     public function tipocompulsao()
    {
       
        return $this->belongsTo(Tipo_compulsao::class);
    }
     public function tipovicio()
    {
        
        return $this->belongsTo(Vicio::class);
    }
     public function turma()
    {
        
        return $this->belongsTo(Turma::class);
    }
     
    
    
    
}
