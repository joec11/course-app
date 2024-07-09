<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;

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

// Default Route to display the index (list) of courses
Route::get('/', [CourseController::class, 'index'])->name('course.index');

// Route to display the index (list) of courses
Route::get('/courses', [CourseController::class, 'index'])->name('course.index');

// Route to display the form to create a new course
Route::get('/courses/create', [CourseController::class, 'create'])->name('course.create');

// Route to handle the creation of a new course
Route::post('/courses', [CourseController::class, 'store'])->name('course.store');

// Route to display the form to edit an existing course
Route::get('/courses/{course}/edit', [CourseController::class, 'edit'])->name('course.edit');

// Route to handle updating an existing course
Route::put('/courses/{course}', [CourseController::class, 'update'])->name('course.update');

// Route to display details of a specific course
Route::get('/courses/{course}/show', [CourseController::class, 'show'])->name('course.show');

// Route to delete a specific course
Route::delete('/courses/{course}', [CourseController::class, 'destroy'])->name('course.destroy');
