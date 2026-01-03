<?php

namespace App\Http\Controllers;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Models\User;

class HODController extends Controller
{
    public function pendingStudents()
    {
        $hodDepartment = auth()->user()->department;

        $students = Student::where('department', $hodDepartment)
            ->where('status', 'Pending')
            ->get();

        return view('hod.pending', compact('students'));
    }

    public function approve($id)
    {
        Student::where('id', $id)
            ->update(['status' => 'Verified']);

        return redirect()->back()->with('success', 'Student approved');
    }
}
