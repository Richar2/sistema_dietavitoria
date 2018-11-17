<!DOCTYPE html>
<html>
    <head>
        <title>Login Sistema</title>
        <meta charset="UTF-8">
         <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/stilo_login.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet"> 
    </head>
    <body>
        <div class="logo"></div>
        
        <section id="conteudo-view" class="login">
            
            <h1>Dieta Vitoria</h1>
            <h3>Adminstração de Alunos</h3>
            
            {!!Form::open(['route'=>'user.login','method'=>'post']) !!}
            <p>Fazer login</p>
            
            <label>
               {!!Form::text('username',null,['class'=>'input', 'placeholder'=>"Usuario"])!!} 
            </label>
            
            <label>
                {!!Form::password('password',[ 'placeholder'=>"Senha"])!!}
            </label>
                
                
            {!!Form::submit('Entrar')!!}
            
            
            {!!Form::close()!!}
             
            
        </section> 
       
        
        
        
        <script src="{{asset('js/app.js')}}"></script> 
    </body>
</html>