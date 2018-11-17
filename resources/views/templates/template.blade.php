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
           
       @yield('css-view')  
    </head>
    <body>
       
             
        @yield('conteudo-view')
        @yield('js-view')
     <script src="{{asset('js/app.js')}}"></script>  
    </body>
    
    
</html>
