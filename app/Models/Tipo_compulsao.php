<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_compulsao extends Model
{
    protected $table= 'tipocompulsao'; 
   
    
   public function aluno(){
       return $this->belongsTo('App\Models\Aluno', 'TipoCompulsaoId', 'Id'); 
    
       
   } 
    
    
    
}
