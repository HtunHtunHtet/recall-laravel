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
//    Route::get('/jobs/{job}/edit',  'edit');
//    Route::patch('/jobs/{job}',  'update');
//    Route::delete('/jobs/{job}',  'destroy');
//});

/** Resource Approach */
//Route::resource('jobs', JobController::class);

// Job
Route::get('/jobs', [JobController::class, 'index']);
Route::get('/job/create', [JobController::class, 'create']);
Route::get('/jobs/{job}', [JobController::class, 'show']);
Route::post('/jobs', [JobController::class, 'store'])->middleware('auth');
Route::get('/jobs/{job}/edit', [JobController::class, 'edit'])
    ->middleware('auth')
    ->can('edit', 'job');

Route::patch('/jobs/{job}', [JobController::class, 'update'])->middleware('auth');
Route::delete('/jobs/{job}', [JobController::class, 'destroy'])->middleware('auth');

// Auth
Route::get('/register', [RegisteredUserController::class,'create']);
Route::post('/register', [RegisteredUserController::class,'store']);

// Session
Route::get('/login', [SessionController::class, 'create'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::post('/logout', [SessionController::class, 'destroy']);

Route::view('/contact', 'contact');
