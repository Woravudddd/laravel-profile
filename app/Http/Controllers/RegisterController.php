<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    /**
     * Display register page.
     * 
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        
        return view('Home.register');
    }

    /**
     * Handle account registration request
     * 
     * @param RegisterRequest $request
     * 
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request) 
    {
      
       
        $user = User::create($request->all());


    
       // auth()->login($user);
       if(!$user){
           
           echo '<script> console.log("error") </script>';
           Session::flash('error', "Worng");

           return redirect('/register')->with('error', "Account successfully registered.");
       }
        Session::flash('success', "Special message goes here");

        return redirect('/login')->with('success', "Account successfully registered.");
    }
}
 