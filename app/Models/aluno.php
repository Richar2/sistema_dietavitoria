<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class aluno extends Model
{
    protected $table ='aluno';
    
     protected $fillable=[
        'Id',
        'idx_1',
        'idx_2'
    ];
}
