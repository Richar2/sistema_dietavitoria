<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table= 'aluno';
    
    




    public function familia()
    {
        
        return $this->hasOne(Familia::class, 'FamiliaId', 'Id');
    }
    public function clinico()
    {
        
        return $this->hasOne(Clinico::class, 'ClinicoId', 'Id');
    }
     public function tipocompulsao()
    {
       
        return $this->hasOne(Tipo_compulsao::class, 'TipoCompulsaoId', 'Id');
    }
     public function tipovicio()
    {
        
        return $this->hasOne(Tipo_vicio::class, 'VicioId', 'Id');
    }
     public function turma()
    {
        
        return $this->hasOne(Turma::class, 'TurmaId', 'Id');
    }
     
    
    
    
}
