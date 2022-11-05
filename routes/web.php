<?php

use App\Http\Controllers\Landing;
use App\Http\Controllers\Youssef;
use App\Http\Controllers\Admin\Rank;
use Illuminate\Support\Facades\Auth;
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



Route::group(['namespace' => 'Admin'],function(){
    Route::get('first',[Rank::class,'first']);
    Route::get('second',[Rank::class,'second']);
    Route::get('third',[Rank::class,'third']);

});

Route::get('/A',[Youssef::class,'youssefinfo']);

Route::get('/landing',[Landing::class,'landingshow']);

Route::get('/', function () {
    return view('welcome');
});

Auth::routes(['verify'=>true]);//the user must verify his email befor we let him log in

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home') ->middleware('verified');//this middleware inshure that the user is vreified
