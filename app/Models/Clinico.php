<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinico extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
   protected $fillable=[
      
          
       'hasAnsiedade',
       'hasInsonia',
       'hasHipertensao',
       'hasDiabetes',
       'hasAlergias',
       'hasDisturbiosOncologicos',
       'hasProblemasRenais',
       'hasMenopausa',
       'hasHipotiroidismo',
       'hasColesterol',
       'hasFigado',
       'hasOutros'
       
       
       
       ];



   public function aluno(){
        return $this->belongsTo('App\Models\Aluno', 'ClinicoId', 'Id');
    }
   
   
   
}
