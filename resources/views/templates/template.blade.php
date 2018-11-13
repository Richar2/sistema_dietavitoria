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
           

    </head>
    <body>
        <div class="container">
        
            @yield('content')
        
        </div>      
         
          <script src="{{asset('js/app.js')}}"></script>  
    </body>
    
    
</html>
