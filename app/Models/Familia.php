<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $table= 'familia'; 
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
        'hasVicios'
        
        ];
    
    

    public function aluno(){
        return $this->hasOne(Aluno::class);
    }
  
    
    
    
    
    
}
