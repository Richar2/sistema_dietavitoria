<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    public function login()
    {
     $auntentifiq=$this->validate(request(),[
        'username' =>'|required|string',
         'password'=> '|required|string'
     ]);   
     
      if(Auth::attempt($auntentifiq))
      {
          return redirect()->route('dash');   
      }
          return'login ou senha incorreto'; 
      
      }
    }
  

   
    
    
    

