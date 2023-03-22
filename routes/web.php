<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\StudentController;
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


//home
Route::get('/',[HomeController::class,'index'])->name('home');

//students
Route::prefix('/students')->group(function() {
      Route::get('/',[StudentController::class,'index'])->name('studentList');
      Route::post('/add',[StudentController::class,'add'])->name('studentList.add');
      Route::get('/{student_id}/delete',[StudentController::class,'delete'])->name('student.delete');
      Route::get('/{student_id}/statusUpdate',[StudentController::class,'statusUpdate'])->name('student.statusUpdate');
      Route::get('/{student_id}/statusUpdateactive',[StudentController::class,'statusUpdateActive'])->name('student.statusUpdateactive');
});


