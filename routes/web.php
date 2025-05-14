<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/student',[StudentController::class , 'student_list'])->name('student.list');
Route::get('/student/create',[StudentController::class , 'createStudent'])->name('student.create');
Route::post('/student/store',[StudentController::class , 'store'])->name('student.store');
Route::get('/student/edit/{id}',[StudentController::class , 'editStudent'])->name('student.edit');
Route::put('/student/update/{id}',[StudentController::class , 'update'])->name('student.update');
Route::get('/student/delete/{id}',[StudentController::class , 'delete'])->name('student.delete');