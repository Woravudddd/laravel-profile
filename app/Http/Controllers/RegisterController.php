<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
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
      
       
       // $user = User::create($request->all());

      
        try {
            $user = User::create($request->all());
            Session::flash('success', "Account successfully registered.");
            return redirect('/login')->with('success', "Account successfully registered.");
        } catch (\Illuminate\Database\QueryException $e) {
            $errorCode = $e->errorInfo[1];
        
            if ($errorCode == 1062) { // Duplicate entry error code
                Session::flash('error', "Email already exists.");
                return redirect('/register')->with('error', "Email already exists.");
            } else {
                echo '<script> console.log("error") </script>';
                Session::flash('error', "An error occurred during registration.");
                return redirect('/register')->with('error', "An error occurred during registration.");
            }
        }

    }
}
 