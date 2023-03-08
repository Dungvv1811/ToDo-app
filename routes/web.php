<?php


use App\Http\Controllers\RegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;

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



Route::get('/', function () {
    return view('welcome');
});

//Route::get('/register',[
//    'as' => 'register',
//    'uses' => 'RegisterController@register'
//]);


//Route::get('/login', function () {
//    return view('welcome');
//});

//Route::get('/login',[
//    'as' => 'login',
//    'uses' => 'LoginController@login'
//]);

//Route::get('/register', [RegisterController::class, 'register'])->name('register');
//Route::post('/postRegister', [RegisterController::class,'postRegister']);
Route::get('/register', [RegisterController::class, 'create']);
Route::post('/postRegister', [RegisterController::class,'store']);
Route::get('/login', [LoginController::class, 'login', 'login'])->name('login');



