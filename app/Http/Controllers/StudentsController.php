<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;

class StudentsController extends Controller
{
    public function index()
    {
    // $nama = "budi";
    //orm:
    $student = Student::all();
    // dd($student);  
    return view('student', ['studentList' => $student]);
}
}
