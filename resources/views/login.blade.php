<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <h1>tela de login</h1>
        @foreach($alunos as $aluno)
    <tr>{{$aluno->nome }}</tr> 
        
        @endforeach
        
    </body>
</html>
