<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aluno;

class SiteController extends Controller
{
    private $aluno;
    
    public function __construct(aluno $aluno) {
        $this->aluno= $aluno  ;
    }

    





    public function test(){
        
        $prod=$this->aluno->find(25);
        dd($prod);
    }
        
      
    
}