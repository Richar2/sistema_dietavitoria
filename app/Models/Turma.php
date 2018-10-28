<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $table= 'turma'; 

    public function aluno(){
        return $this->belongsTo('App\Models\Aluno', 'TurmaId', 'Id');
    }
    
    
    
}
