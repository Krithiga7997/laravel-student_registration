<?php

use App\Models\Student;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('student_registration');
})->name('student_registration');

Route::get('/student_registration', [Student::class, 'create']);
Route::post('/student_registration', [Student::class, 'studentRecord']);

