<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Clinico extends Model
{
   protected $table= 'clinico';    

   
   public function aluno(){
        return $this->belongsTo('App\Models\Aluno', 'ClinicoId', 'Id');
    }
   
   
   
}
