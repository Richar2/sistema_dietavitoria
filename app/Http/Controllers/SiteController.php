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
    
    
  
    public function savecad(Request $request){
        
        //pega dados do formulario
        $dataform =$request->all();
        
       // $aluno= Aluno::create($dataform);
        
        //$clinico=$aluno->clinico->create($dataform);
        //$familia=$aluno->familia->create($dataform);
        //$tipocompulsao=$aluno->tipocompulsao->create($dataform);
        //$tipovicio=$aluno->tipovicio->create($dataform);
        //$turma=$aluno->turma->create($dataform);
        
        
        
       
        
        
        
        
        
        
        
        
        
        
      dd($request->all()); 
    }
        
 
    public function cadastro(){
        return view('sistema.cadastro');
    }
    
    public function updatecad(){
        
        return view('sistema.acompanhamento');
    }
     
    public function cadturma(){
        
    }

    public function test(){
        
    //(30);
    
        
  //  echo $aluno->nome;
    
    //$familia= $aluno->familia ;
    //echo"<hr>{$familia->obs}";
    
    }
    
}