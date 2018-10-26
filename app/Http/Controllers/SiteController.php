<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Clinico;
use App\Models\Familia;
use App\Models\Tipo_compulsao;
use App\Models\Tipo_vicio;
use App\Models\Turma;






class SiteController extends Controller
{
    private $aluno;
    
    public function __construct(Aluno $aluno) {
        $this->aluno= $aluno  ;
    }

    

    public function cadastro(){
        return view();
    }

    
    public function test(){
        
        $prod=$this->aluno->find(25);
        dd($prod);
    }
        
      
    
}