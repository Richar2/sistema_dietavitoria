<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Aluno;
use App\Models\Clinico;
use App\Models\Familia;
use App\Models\Tipo_compulsao;
use App\Models\Vicio;
use App\Models\Turma;
use App\Models\Acompanhamento;
use App\Models\Pagamento;
use Carbon\Carbon;



class SiteController extends Controller
{
    private $clinico;
    private $familia;  
    private $vicio;
    private $tipoco;
    private $acompanhamento ;
    private $aluno;   
    private $turma;
    private $pagamento;

    public function __construct(Pagamento $pagamento,Acompanhamento $acompanhamento, 
    Aluno $aluno ,Turma $turma,Vicio $vicio,Tipo_compulsao $tipoco, Familia $familia,
    Clinico $clinico) 
    
    
    
    
    {
        $this->middleware('auth');
        $this->clinico=$clinico;
        $this->familia=$familia;
        $this->tipoco=$tipoco;
        $this->vicio=$vicio;
        $this->turma=$turma;
        $this->acompanhamento=$acompanhamento;
        $this->aluno=$aluno;
        $this->pagamento=$pagamento; 
          
          
    }
    Public function login(){
        
        
        return view('templates.login'); 
    }


    
    //faz a listagem de alulos 
    Public function searchAluno() 
    {
      $title='Lista de Alunos';
       
        
      
      
      $alunos=$this->aluno->paginate(45);
        
    
        //$alunos=$this->aluno->find(35);
        //$pagamento= $this->pagamento->find(85);
        //$data=$pagamento->aluno_id;
        // $data=Pagamento::table('pagamentos')->orderBy('35');
        



         //$fec=$alunos->ConsistenciaFecalId;
        //$re=$fec*2;
        
        //dd( $alunos);
        
      
      return view('sistema.list', compact('alunos'));
    }
     
     public function savecad(Request $request)
    {
       // dd($request->all());
         
       $dataform=$request->all();
       
         $tipoco=       Tipo_compulsao::create($dataform);
         $turma=        Turma::create($dataform);
         $vicio=        Vicio::create($dataform);
         $clinico=      Clinico::create($dataform);
         $familia=      Familia::create($dataform);
         $aluno=        Aluno::create ($dataform); 
        

         $aluno->familia()->associate($familia);
         $aluno->turma()->associate($turma);
         $aluno->tipovicio()->associate($vicio);
         $aluno->clinico()->associate($clinico);
         $aluno->tipocompulsao()->associate($tipoco);
         $aluno->save();
        
        
        if($aluno)
          return redirect()->route('dash');
        
         else
         return redirect()->back();
        
    
    }
   
   
    public function update(Request $request)
    {
        $tipoco=       Tipocompulsao::create($dataform);
        $turma=        Turma::create($dataform);
        $ti_vicio=     Tipo_vicio::create($dataform);
        $clinico=      Clinico::create($dataform);
        $familia=      Familia::create($dataform);
        $aluno=        Aluno::create ($dataform); 
       

        $aluno->familia()->associate($familia);
        $aluno->turma()->associate($turma);
        $aluno->tipovicio()->associate($ti_vicio);
        $aluno->clinico()->associate($clinico);
        $aluno->tipocompulsao()->associate($tipoco);
        $aluno->save();
        
        
        
        
        
        return '#form';
        
    } 
    
    
 
    public function cadastro()
    {
        return view('sistema.cadastro');
    }
    
    public function updatecad()
    {
        
        return view('sistema.acompanhamento');
    }
     
    
    public function dash()
    {
       return view('sistema.dash');
    }

    public function acompanhamento($id){
   



     return view ('sistema.acompanhamento',compact('id','turmaAlu','acompanhamento'));   
     
     }
  }