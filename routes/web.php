<?php

use Illuminate\Http\Request;

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

Route::get('/', ['uses' => 'Controller@homepage']);
//Route::post('/signup', ['uses' => 'Controller@signup']);
//Route::get('/signin', ['uses' => 'Controller@signin']);
Route::post('/signup', 'Controller@signup');
Route::get('/signin', 'Controller@signin');

/*
Route::prefix('/user')->groups(function(){
    Route::get('/dashboard', ['uses' =>'Controller@userDashboard'])->name('user.dashboard');
    Route::get(){
    }
});
*/
/*
|--------------------------------------------------------------------------
| User auth
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Spaces
|--------------------------------------------------------------------------
*/
Route::resource('spaces', 'SpacesController');