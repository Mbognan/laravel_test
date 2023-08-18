<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
//routes to student data
Route::get('/student',[StudentController::class,'index'])->name('student.index');
//routes to create
Route::get('/student/create',[StudentController::class,'create'])->name('student.create');
Route::post('/student',[StudentController::class,'store'])->name('student.store');
Route::get('/student/{student}/edit',[StudentController::class,'edit'])->name('student.edit');
Route::put('/student/{student}/update',[StudentController::class,'update'])->name('student.update');
Route::delete('/student/{student}/delete',[StudentController::class,'delete'])->name('student.delete');

//Login routes
Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
