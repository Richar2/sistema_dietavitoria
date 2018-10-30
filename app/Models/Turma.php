<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    protected $primaryKey = 'id';
    protected $table= 'turma'; 
    protected $fillable=[
        'nome',
        'Lotacao',
        'Horario',
        'DiaId',
        'Ativo',
        'excluido'
    ];

    public function aluno(){
        return $this->belongsTo('App\Models\Aluno', 'TurmaId', 'Id');
    }
    
    
    
}
