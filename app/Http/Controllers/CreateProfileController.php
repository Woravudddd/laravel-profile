<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Facade\FlareClient\View;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CreateProfileController extends Controller
{
    public function index(Request $request){

      

       $user = Profile::create($request->all());
       dd($user);
       
       return redirect('/home')->with('success','บันทึกข้อมูลสำเร็จ')->with( 'user', $user )
       ;
    }

    public function edit($id){

        $user_id = Profile::find($id);
        if(!$user_id){


        Session::flash('message', "Special message goes here");

        return Redirect('/profile');
        
        }

        return view('Home.edit',compact('user_id'));
    }
    public function showData(array $user){


        $profile = Profile::find( Session::get( 'user' ) );

       
    }

}
