<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });
route::get('/', [HomeController::class,'index'])->name('index');
route::get('/login',[UserController::class,'login'])->name('login');
route::post('/login',[UserController::class,'postLogin']);
route::get('/register',[UserController::class,'register'])->name('register');
route::post('/register',[UserController::class,'postRegister']);
route::get('/logout',[UserController::class,'logout'])->name('logout');


