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
    public function updateProfile(Request $request ,$id){
         
        $user_id = Profile::find($id);
       
        $user_id->name = $request->get('name');
        $user_id->position = $request->get('position');
        $user_id->address = $request->get('address');
      /*  $user_id->hobby1 = $request->get('hobby1');
        $user_id->hobby2 = $request->get('hobby2');
        $user_id->hobby3 = $request->get('hobby3');
        $user_id->hobby4 = $request->get('hobby4');
        $user_id->hobby5 = $request->get('hobby5');
        $user_id->hobby6 = $request->get('hobby6');*/
        $user_id->name1 = $request->get('name1');
        $user_id->email1 = $request->get('email1');
        $user_id->address1 = $request->get('address1');
        $user_id->progressvalue = $request->get('progressvalue');
        $user_id->progressvalue2 = $request->get('progressvalue2');
        $user_id->progressvalue3 = $request->get('progressvalue3');
        $user_id->progressvalue4 = $request->get('progressvalue4');
        $user_id->progressvalue5 = $request->get('progressvalue5');
        $user_id->save();


        return redirect('/profile')->with('success','update successfully');



       
    }
    public function destroy($id)
    {
        $profile = Profile::find($id);
        $profile->delete(); // Easy right?
 
        return redirect('/')->with('removesuccess', 'profile has been removed.');  // -> resources/views/stocks/index.blade.php
    } 

}
