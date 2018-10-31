@extends('templates.template')

@section('content')


<h1>List</h1>

<table>
    <tr>
        <th>AlunoId</th>
    </tr>
    @foreach($acompanhamentos as $acompanhamento)
    <tr>
        <td>{{$acompanhamento->AlunoId}}</td>
        
        
        
    </tr>
    @endforeach
    
    
    
    
</table>