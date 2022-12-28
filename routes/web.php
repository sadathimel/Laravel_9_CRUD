<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController; // Add Student Controller

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


Route::resource('/student', StudentController::class);
// Route::get('/student/create', StudentController::class,'create');
// Route::post('/student/create', StudentController::class,'store');
// Route::get('/student/edit/{student}', StudentController::class,'edit');
// Route::get('/student/show/{student}', StudentController::class,'show');
// Route::post('/student/edit/{student}', StudentController::class,'update');
// Route::post('/student/delete/{student}', StudentController::class,'destroy');