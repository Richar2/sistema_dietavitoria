<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Clinico;
use App\Models\Familia;
use App\Models\Tipo_compulsao;
use App\Models\Tipo_vicio;
use App\Models\Turma;
use App\Models\Acompanhamento;




class SiteController extends Controller
{
      
     
     
    private $acompanhamento ;
    private $aluno;   



      public function __construct(Acompanhamento $acampanhamento, Aluno $aluno) 
      {
         $this->acompanhamento=$acampanhamento;
         $this->aluno=$aluno;
          
          
          
    }

    
    //faz a listagem de alulos 
    Public function searchAluno() 
    {
      $title='Lista de Alunos';
       
        $alunos=$this->aluno->paginate(30);
        //dd($alunos);
      return view('sistema.list', compact('alunos'));
    }
     
     public function savecad(Request $request)
    {
 
        
    }
        
 
    public function cadastro()
    {
        return view('sistema.cadastro');
    }
    
    public function updatecad()
    {
        
        return view('sistema.acompanhamento');
    }
     
    public function cadturma()
    {
        
    }

    public function acompanhamento(){
        //recebe o id do aluno
      $aluno=$this->aluno->find(35);
      $chave=$aluno;
       //$acompanhamento=$this->acompanhamento->whereChave($chave)->orderBy('alunoId', 'desc')->first();
        
        //$acompanhamento=$this->acompanhamento->orderBy(886);
        //$model->whereChave($chave)->latest()->first()
      $acompanhamento=Acompanhamento::where('alunoId', $chave)->orderBy('Data', 'desc' )->first();
       
      
     //dd($chave); 
     return view ('sistema.acompanhamento',compact('aluno'));   
     
     }
  }