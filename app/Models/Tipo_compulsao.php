<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Tipo_compulsao extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable=[
        'hasCompulsaoDoce',
        'hasCompulsaoSalgado'
    ];






    public function aluno(){
       return $this->belongsTo('App\Models\Aluno', 'TipoCompulsaoId', 'Id'); 
    
       
   } 
    
    
    
}
