<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Profile;

class ProfileController extends Controller
{
    public function index(){
        
        $user_name = Auth::user()->username;

        
                
        $profile = DB::table('profiles')->where('create_by' , $user_name )->get();
        
        
        return view('Home.profile',compact('profile'));
    }
    public function cardindex(){


        return view('Home.cardprofile');
    }
}
