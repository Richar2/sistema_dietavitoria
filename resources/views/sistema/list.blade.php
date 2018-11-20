@extends('templates.template')

@section('css-view')
@endsection

    
@section('js-view')
@endsection        

@section('conteudo-view')


<h1 class="titul-pg">List</h1>

<table class="table table-striped">
    <tr>
        <th>Id</th>
        <th>Nome</th>
        
    </tr>
    @foreach($alunos as $aluno)
    <tr>
        <td>{{$aluno->Id}}</td>
        <td>{{$aluno->nome}}</td>
        
        
        
    </tr>
    @endforeach
    
    
    
    
</table>
  {!!$alunos->links()!!}
  @endsection