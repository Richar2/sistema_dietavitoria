<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_vicio extends Model
{
    protected $table= 'tipovicio'; 

    
    
    public function aluno(){
        return $this->belongsTo('App\Models\Aluno', 'VicioId', 'Id');
        
    }
    
    
    
}
