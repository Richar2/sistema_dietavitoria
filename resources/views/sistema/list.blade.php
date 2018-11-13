@extends('templates.template')

@section('content')


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