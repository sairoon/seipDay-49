<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\StudentController;

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


Route::get('/',[FrontController::class,'home'])->name('home');

Route::get('/add-student',[StudentController::class,'create'])->name('student-create');
Route::post('/new-student',[StudentController::class,'store'])->name('student.store');
Route::get('/manage-student',[StudentController::class,'index'])->name('student-index');
