<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Familia extends Model
{
    protected $table= 'familia'; 

    public function aluno(){
        return $this->belongsTo('App\Models\Aluno', 'FamiliaId', 'Id');
    }
    
    
    
    
    
}
