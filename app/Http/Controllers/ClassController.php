<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ClassRoom;


class ClassController extends Controller
{
    public function index()
    {
    // $nama = "budi";
    //orm:
    // $class = ClassRoom::all();
    $class = ClassRoom::with('students','homeroomTeacher')->get();
    // dd($student);  
    return view('classroom', ['classList' => $class]);
}
}
