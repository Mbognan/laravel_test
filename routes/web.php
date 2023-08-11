<?php

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

Route::get('/', function () {
    return view('welcome');
});
//routes to student data
Route::get('/student',[StudentController::class,'index'])->name('student.index');
//routes to create
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');

Route::post('/student',[StudentController::class,'store'])->name('student.store');
//routes to edit
//Route::get('/students/{student}/edit', 'StudentController@click_edit')->name('student.click_edit');
Route::get('/student/{student}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::put('/student/{student}/update',[StudentController::class,'update'])->name('student.update');
Route::delete('/student/{student}/delete',[StudentController::class,'delete'])->name('student.delete');
