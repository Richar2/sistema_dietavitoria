<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id'; 
    protected $fillable=[
        'hasObesidade',
        'hasDoencaRenal',
        'hasHipertensao',
        'hasColesterolGorduraFigado',
        'hasHipotiroidismo',
        'hasAlteracaoGlicerides',
        'hasBulimia',
        'hasCompulsaoAlimentar',
        'hasIntoleranciaLactose',
        'hasIntoleranciaGluten',
        'hasVicios',
        'FamiliaObs'
        
        ];
    
    

    public function aluno(){
        return $this->hasOne(Aluno::class);
    }
  
    
    
    
    
    
}
