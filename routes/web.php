<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CastsController;
use App\Http\Controllers\GenreController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FilmController;
use App\Http\Controllers\PeranController;
use App\Http\Controllers\KritikController;
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

Route::controller(AuthController::class)->group(function() {
    Route::get('/register', 'register')->name('auth.register');
    Route::post('/store', 'store')->name('auth.store');
    Route::get('/login', 'login')->name('auth.login');
    Route::post('/auth', 'authentication')->name('auth.authentication');
    Route::get('/dashboard', 'dashboard')->name('auth.dashboard');
    Route::post('/logout', 'logout')->name('auth.logout');
});


//Route::get('/', function (){
//    return view('index');
//});
Route::get('/', [UserController::class, 'index']);

//Route::get('/form', function (){
//    return view('form');
//})->name('get-form');
Route::get('/form', [UserController::class, 'form'])->name('get-form');
 
Route::post('/welcome', function (){
    return view('welcome');
})->name('get-welcome');

Route::resource('/casts', CastsController::class)->middleware('auth');

Route::resource('/genres', GenreController::class)->middleware('auth');

Route::resource('/film', FilmController::class)->middleware('auth');

Route::get('/film/{film}/peran/create', [PeranController::class, 'create'])->name('peran.create')->middleware('auth');
Route::post('/film/{film}/peran', [PeranController::class, 'store'])->name('peran.store')->middleware('auth');

Route::get('/film/{film}/kritik/create', [KritikController::class, 'create'])->name('kritik.create')->middleware('auth');
Route::post('/film/{film}/kritik', [KritikController::class, 'store'])->name('kritik.store')->middleware('auth');