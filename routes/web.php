<?php

use App\Http\Controllers\JobController;
use App\Http\Controllers\RegisteredUserController;
use App\Http\Controllers\SessionController;
use Illuminate\Support\Facades\Route;

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

Route::view('/','home');

//Route::controller(JobController::class)->group(function (){
//    Route::get('/jobs',  'index');
//    Route::get('/job/create',  'create');
//    Route::get('/jobs/{job}',  'show');
//    Route::post('/jobs',  'store');
//    Route::get('/jobs/{job}',  'edit');
//    Route::patch('/jobs/{job}',  'update');
//    Route::delete('/jobs/{job}',  'destroy');
//});

Route::resource('jobs', JobController::class);

Route::get('/register', [RegisteredUserController::class,'create']);

Route::post('/register', [RegisteredUserController::class,'store']);

Route::get('/login', [SessionController::class, 'create']);

Route::post('/login', [SessionController::class, 'store']);

Route::post('/logout', [SessionController::class, 'destroy']);

Route::view('/contact', 'contact');
