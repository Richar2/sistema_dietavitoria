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
    
    
  
    public function savecad(){
       $dataform; 
    }
        
 
    public function cadastro(){
        return view('sistema.cadastro');
    }
    
    public function updatecad(){
        
    }
     
    public function cadturma(){
        
    }

    public function test(){
        
    $aluno= Aluno::find(30);
    
        
    echo $aluno->nome;
    
    $familia= $aluno->familia ;
    echo"<hr>{$familia->obs}";
    
    }
    
}