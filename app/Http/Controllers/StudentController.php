<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;

class StudentController extends Controller
{
    public function create() {
        return view('students.create');
    }

    public function store(Request $request) {
        $request->validate([
            'student_name' => 'required|string',
            'registration_no' => 'required|unique:students',
            'email' => 'required|unique:students',
            'department' => 'required|string',
            'semester' => 'required|interger|min:1|max:10',
        ]);

        Student::create($request->all());

        return 
        redirect()->back()->with('success', 'Registration submitted. Await HOD verification.');
    }
}
