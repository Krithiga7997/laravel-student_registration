<?php

use App\Http\Controllers\HODController;
use App\Models\Student;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('student_registration');
})->name('student_registration');

Route::get('/student_registration', [Student::class, 'create']);
Route::post('/student_registration', [Student::class, 'store']);

Route::get('/hod/pending', [HODController::class, 'pendingStudents']);
Route::post('/hod/approve/{id}', [HODController::class, 'approve']);


