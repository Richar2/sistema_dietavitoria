<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\aluno;

class SiteController extends Controller
{
    public function index(aluno $aluno){
        $alunos = $aluno->all();
        
        return view('alunos.index', compact($alunos));   
    }
 
    public function cadastro(){
        return 'pag cadastro';
    }
    
    public function categoria($id=1){
        return"categoria($id)";
    }
    
    
}