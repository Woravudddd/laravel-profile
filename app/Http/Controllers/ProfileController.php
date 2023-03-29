<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use App\Models\User;


use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;

class ProfileController extends Controller
{
    public function index(){
        
        $user_name = Auth::user()->username;

        
                
        $profile = DB::table('profiles')->where('create_by' , $user_name )->get();
        
        
        
        return view('Home.profile',compact('profile'));
    }
    public function cardindex(){
      
        $user_name = Auth::user()->username;

        $profilecard = DB::table('profiles')->get();

           

        return view('Home.cardprofile',compact('profilecard','user_name'));

    }
  
    public function profileincard($id){

           $profiles =  Profile::find($id);

        


           return view('Home.profilepage',compact('profiles'))->with('success');

    }

    public function editProfileId($username){
        

        $profilecard = DB::table('users')->where('username' ,$username )->first();
        
       
      

        return view('Home.editProfilePage',compact('profilecard'));

    }

    public function updateProfileUser(Request $request ,$id){
         
        $user_id = User::find($id);

        $user_id->fristname =$request->get('fristname');
        $user_id->lastname =$request->get('lastname');
        $user_id->phone = $request->get('phone');
        $user_id->dob = $request->get('dob');
        $user_id->save();
        
       

   
return redirect('/profile/editprofile/'.$user_id->username)->with('success','update successfully');



       
    }
    public function uploadImage(Request $request,$id){
        
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg,JPG|max:2048',
        ]);

       

        $user_id = User::find($id);
      
        $image = $request->file('image');
        
        

        if($image || $image == NULL || $image == ""){

            $destinationPath = 'images/';
            $profileImage = date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath,$profileImage);
            $input['image'] = "$profileImage";

            
        
        $user_id->fristname = $user_id->fristname;
        $user_id->lastname  = $user_id->lastname;
        $user_id->phone = $user_id->phone;
        $user_id->dob = $user_id->dob;
        $user_id->image = $input['image'];
        $user_id->save();
           

        }else{

            unset($input['image']);

        }

       
    
        return redirect('/profile/editprofile/'.$user_id->username)
                        ->with('success','Product updated successfully');

}
  
}
