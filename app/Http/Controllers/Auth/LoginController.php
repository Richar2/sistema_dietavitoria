<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;

class LoginController extends Controller
{
    
    public function __construct()
    {
        $this->middleware('guest',['only' =>'autetinficado']);
                
    }
    
    
    public function autetinficado()
    {
        return view('auth.login');
        
    }

    



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
      public function logout()
      {
       Auth::logout();
       
       return redirect('/');
      }
              
      
     }
  

   
    
    
    

