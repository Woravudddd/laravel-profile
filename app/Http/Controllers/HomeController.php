<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Profile;
use App\Models\User;

class HomeController extends Controller
{
    public function index(){

            
          
        $profilecard = Profile::all()->count();

        $user1 = User::all()->count();

        $year = ['2015','2016','2017','2021','2022','2023'];

        $user = [];
        foreach ($year as $key => $value) {
            $user[] = User::where(DB::raw("DATE_FORMAT(created_at, '%Y')"),$value)->count();
        }

        
        return view('Home.index' , compact('profilecard'))->with('year',json_encode($year,JSON_NUMERIC_CHECK))->with('user',json_encode($user,JSON_NUMERIC_CHECK));
    }


}
