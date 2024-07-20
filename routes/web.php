<?php

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

//layouts
Route::get('/', [HomeController::class,'index'])->name('index');
Route::get('/contact',[HomeController::class, 'contact'])->name('contact');
Route::get('/post-details-{slug}',[HomeController::class, 'details'])->name('bai-viet');

Route::get('/tintucmoinhat', [HomeController::class, 'tintucmoinhat']);
Route::get('/tinnong', [HomeController::class, 'tinnong']);
Route::get('/xemnhieunhat', [HomeController::class, 'xemnhieunhat']);

Route::get('/profile',[HomeController::class, 'profile'])->name('profile');

// login
route::get('/login',[UserController::class,'login'])->name('login');
route::post('/login',[UserController::class,'postLogin']);
route::get('/register',[UserController::class,'register'])->name('register');
route::post('/register',[UserController::class,'postRegister']);
route::get('/logout',[UserController::class,'logout'])->name('logout');
route::get('/forget',[UserController::class,'forget'])->name('forget');
route::post('/forget',[UserController::class,'postForget']);

// route::prefix('admin')
//     ->as('admin')
//     ->middleware(['admin'])   
//     ->group(function (){
//         route::get('');
//     });

// //bai 1
// Route::get('/', function () {
//     return view('welcome');
// });
// //bai 2
// Route::get('/user/{id}', function ($id) {
//     return "User ID: " . $id;
// });

// //bai 3
// Route::get('/product/{name}', function ($name) {
//     return "Product Name: " . $name;
// })->name('product.show');
//  //bai 4
//  Route::prefix('admin')->group(function () {
//     Route::get('/users', function () {
//         return "Admin User List";
//     });
// });
// //bai 5

// Route::get('/register', [UserController::class, 'register']);

// //bai 6
// Route::get('/dashboard', function () {
//     return "Dashboard";
// })->middleware('auth');




