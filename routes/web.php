<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreateProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreItemController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::group(['namespace' => 'App\Http\Controllers'], function()
{   
    /**
     * Home Routes
     */
    Route::get('/home', 'HomeController@index')->name('Home.index');

    Route::group(['middleware' => ['guest']], function() {
        /**
         * Register Routes
         */
        
        Route::get('/' , [HomeController::class, 'index']);

        Route::get('/register', 'RegisterController@show')->name('register.show');
        Route::post('/register', 'RegisterController@register')->name('register.perform');

        /**
         * Login Routes
         */
        Route::get('/login', 'LoginController@show')->name('login.show');
        Route::post('/login', 'LoginController@login')->name('login.perform');

    });

    Route::group(['middleware' => ['auth']], function() {
        /**
         * Logout Routes
         */
        Route::get('/cardprofile' , [ProfileController::class, 'cardindex'])->name('cardprofile.login');
        Route::get('profile' , [ProfileController::class, 'index'])->name('profile.login');
        Route::get('/logout', 'LogoutController@perform')->name('logout.perform');
        Route::get('home/createitem' , [StoreItemController::class, 'index']);
        Route::get('/member' , [MemberController::class, 'index']);
        Route::post('/profile/createprofile' , [CreateProfileController::class, 'index'])->name('create.profile');
        Route::get('/profile/{id}/edit' , [CreateProfileController::class, 'edit'])->name('edit.profile');


    });
});



Route::get('/admin' , [AdminController::class, 'index'])->middleware('check');


