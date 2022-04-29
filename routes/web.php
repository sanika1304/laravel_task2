<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomAuthController;

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
Route::view('/login','login');
Route::view('/register','register');
// Route::get('/register',[CustomAuthController::class,'register']);
// Route::post('/register-user',[CustomAuthController::class,'registerUser'])->name
// ('register-user');
Route::view('register','register');
Route::post('add' ,[CustomAuthController::class,'addData']);
Route::view('addlogin','success');
Route::post('addlogin' ,[CustomAuthController::class,'login']);


// login 
