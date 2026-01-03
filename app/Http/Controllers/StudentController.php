<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create() {
        return view('students.create');
    }

    public function studentRecord(Request $request) {
        $request->validate([
            'student_name' => 'required|string',
            'registration_no' => 'required|unique:students',
        ])
    }
}
