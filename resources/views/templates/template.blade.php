<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
         <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta charset="UTF-8">
        <title></title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/stilo_template.css')}}">  
        <link href="https://fonts.googleapis.com/css?family=Russo+One" rel="stylesheet"> 
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css"> 
     @yield('css-view')  
    </head>
    <body>
        <nav id="principal">
            {{ csrf_field() }}           
            <ul>
                     <li>
                        <a href="{{url('/dash/searchAluno')}}">
                        <i class="fas fa-user-graduate"></i>     
                        <h3>Alunos</h3> 
                        </a> 
                     </li>
                
                       <li>
                       <a href="{{url('/dash/cadastro')}}"> 
                           <i class=""></i>     
                           <h3>Cadastrar</h3>
                        </a>  
                       </li>
                   
                        
                        <li>
                           <a href="">
                           <i class=""></i>     
                           <h3>Turmas</h3>
                           </a>  
                       </li>
                  
                       
                        <li>
                            <a href=""> 
                           <i class=""></i>     
                           <h3>Pagamentos</h3>
                           </a>  
                       </li>
                    </ul>     
            </nav>




        
        <div style="padding-left: 200px" class="container">  
        @yield('conteudo-view')
        </div>
        @yield('js-view')
     <script src="{{asset('js/app.js')}}"></script>  
    </body>
    
    
</html>
