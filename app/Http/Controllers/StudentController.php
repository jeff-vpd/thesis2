<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{
    public function StudentAll(){
        $student = Student::latest()->get();
        return view('backend.student.student_all', compact('student'));
    }
}
