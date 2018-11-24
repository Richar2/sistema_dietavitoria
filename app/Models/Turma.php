<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Turma extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable=[
        'tnome',
        'Lotacao',
        'Horario',
        'DiaId',
        'Ativo',
        'excluido'
    ];

    public function aluno(){
        return $this->belongsTo('App\Models\Aluno');
    }
    
    
    
}
