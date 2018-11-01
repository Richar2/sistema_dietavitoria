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
      
     
     

   



      public function __construct() {
          
         
          
          
          
    }


    public function savecad(Request $request){
        
        //pega dados do formulario
        $dataform =$request->all();
        
  "nome" => 
  "Sobrenome" => 
  "Sexo" => 
  "Profissao" => 
  "Cpf" => 
  "DataNascimento" => 
  "Email" => 
  "Endereco" => 
  "Numero" => 
  "Complemento" => 
  "Cep" => 
  "Bairro" => 
  "Cidade" => 
  "Telefone" => 
  "Celular" => 
  "QuantidadeFilhos" => 
  "Altura" => 
  "Peso" => 
  "PesoIdeal" => 
  "Cintura" => 
  "Quadril" => 
  "Coxa" => 
  "UserFacebook" => 
  "DataPrimeiraAula" => 
  "Ativo" => 
  "hasAnsiedade" => 
  "hasInsonia" => 
  "hasHipertensao" => 
  "hasDiabetes" => 
  "hasAlergias" => 
  "hasDisturbiosOncologicos" => 
  "hasProblemasRenais" => 
  "hasMenopausa" => 
  "hasOutros" => 
  "hasHipotiroidismo" =>
  "hasColesterol" => 
  "hasFigado" => 
  "ConsistenciaFecalId" => 
  "NivelDeAtividade" => 
  "Obs" => 
  "familiaHasObesidade" => 
  "familiaHasDoencaRenal" => 
  "familiaHasHipertensao" => 
  "familiaHasColesterolGorduraFigado" =>
  "familiaHasHipotiroidismo" => 
  "familiaHasAlteracaoGlicerides" => 
  "familiaHasBulimia" => 
  "familiaHasCompulsaoAlimentar" => 
  "hasVicio" => 
  "hasIntoleranciaLactose" => 
  "hasIntoleranciaGluten" => 
  "FamiliaObs" => 
        
        
       
        
        
        
        
        
        
        
        
        
        
     echo dd($dataform); 
    }
        
 
    public function cadastro(){
        return view('sistema.cadastro');
    }
    
    public function updatecad(){
        
        return view('sistema.acompanhamento');
    }
     
    public function cadturma(){
        
    }

    public function test(Acompanhamento $acompanhamento){
        $acompanhamentos=$acompanhamento->all();
        return view ('sistema.list',compact('acompanhamentos'));
    //echo dd($acompanhamento);
    }
    
}