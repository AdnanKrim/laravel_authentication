<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Userauthcontroller;

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
// Route::view('auth','auth');

Route::get('login',[Userauthcontroller::class,'login'])->middleware('restrict');
Route::get('register',[Userauthcontroller::class,'register'])->middleware('restrict');
Route::post('create',[Userauthcontroller::class,'create']);
Route::post('check',[Userauthcontroller::class,'check']);
Route::get('profile',[Userauthcontroller::class,'profile'])->middleware('logged');
Route::get('logout',[Userauthcontroller::class,'logout']);