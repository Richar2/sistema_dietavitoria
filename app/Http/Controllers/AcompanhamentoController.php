<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\acompanhamento;

class AcompanhamentoController extends Controller
{
    
    
    
    
    
    
    //public function calculos(){
        
    //}
    
    
    public function __construct(acompanhamento $acompanhamento) {
        $this->acompanhamento= $acompanhamento  ;
    }
    
    public function test(){
        
        $prod=$this->acompanhamento->find(23);
        dd($prod);
    }
    
    
    
}
