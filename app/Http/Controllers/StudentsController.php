<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\student;

class StudentsController extends Controller
{
    public function index()
    {
    // $nama = "budi";
    //orm:
    $student = student::all();
    // dd($student);  
    return view('student', ['studentList' => $student]);
}
}
