<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CreateProfileController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MemberController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\StoreItemController;
use GuzzleHttp\Promise\Create;
use Illuminate\Support\Facades\Redirect;
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
        Route::get('/profile/edit/{id}' , [CreateProfileController::class, 'edit'])->name('edit.profile');
        Route::post('/profile/update/{id}' , [CreateProfileController::class, 'updateProfile'])->name('update.profile');
        Route::post('/profile/delete/{id}',[CreateProfileController::class , 'destroy'])->name('destroy.profile');
        Route::get('/card/profile/{id}' , [ProfileController::class , 'profileincard'])->name('profileincard.card');
        Route::get('/profile/editprofile/{username}' , [ProfileController::class , 'editProfileId'])->name('editprofilepage');
        
        Route::post('/profile/updateprofile/upload/{id}' , [ProfileController::class , 'uploadImage'])->name('uploadImagePage');
        Route::post('/profile/updateprofile/{id}' , [ProfileController::class , 'updateProfileUser'])->name('updateProfileUserPage');

    });
});



Route::get('/admin' , [AdminController::class, 'index'])->middleware('check');


