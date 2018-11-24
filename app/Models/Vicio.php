<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vicio extends Model
{
    public $timestamps = false;
    protected $primaryKey = 'id';
    protected $fillable=[
        'hasTabagismo',
        'hasAlcool',
        'hasOutros'
    ];




    public function aluno(){
        return $this->belongsTo('App\Models\Aluno');
        
    }
    
    
}
