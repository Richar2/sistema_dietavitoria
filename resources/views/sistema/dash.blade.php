@extends('templates.template')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')
<div class="panel-body">
   
       {!!Form::open(['route'=>'logout','method'=>'post']) !!}
             {{ csrf_field() }}
        
        
        <button class="btn btn-danger">Finalizar sessão</button>
         {!!Form::close()!!}
   
</div>
@endsection 
