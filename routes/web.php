<?php

use App\Http\Controllers\BeritaController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return view('home', [
    "title" => "Home"
    ]);
});

Route::get('/about', function () {
    return view('about', [
    "title" => "About",
    "name" => "Leonardo Dacosta",
    "email" => "dacostaleonardo137@gmail.com",
    "image" => "leofoto.jpg"
    ]);
});

Route::get('/news', [BeritaController::class, 'index']);
Route::get('/news/{news_detil:slug}',[BeritaControler::class,'show']);

Route::get('/login',[LoginController::class,'index']);
Route::post('/login',[LoginController::class,'authenticate']);

Route::get('/register',[RegisterController::class,'index']);
Route::post('/register',[RegisterController::class,'store']);

Route::get('/dasboard',[DashboardController::class, 'index']);