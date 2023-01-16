<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class CreateProfileController extends Controller
{
    public function index(Request $request){

      

       $user = Profile::create($request->all());

       return redirect('/home')->with('success','บันทึกข้อมูลสำเร็จ');
    }

    public function edit($id){

        $user_id = Profile::find($id);
        if(!$user_id){


        Session::flash('message', "Special message goes here");

        return Redirect('/profile');
        
        }

        return view('Home.edit',compact('user_id'));
    }

}
