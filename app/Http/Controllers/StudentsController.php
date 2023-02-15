<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Student;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index()
    {
    // $nama = "budi";
    //orm:
    $student = Student::with('class.homeroomTeacher','extracurriculars')->get();
    // // dd($student); 
    
    //QUERY BUILDER:GET
    return view('student', ['studentList' => $student]);
    // $student = DB::table('students')->get();
    // dd($student);
    //QUERY BUILDER:INSERT
    // DB::table('students')->insert([
    //     'name' => 'query builder',
    //     'gender' => 'L',
    //     'nis' => '0201021',
    //     'class_id' => 1
    // ]);
    //QUERY BUILDER:UPDATE
    // DB::table('students')->where('id',26)->update([
    //     'name' => 'query builder 2',
    //     'class_id' => 3
    // ]);
    //QUERY BUILDER:DELETE
    // DB::table('students')->where('id', 26)->delete();



    //ELOQUENT ORM:GET
    // $student = Student::all();
    // dd($student);
    //ELOQUENT ORM:INSERT 
    //JANGAN LUPA ADD $fillable DI MODEL
    // Student::create([
    //     'name' => 'eloquent',
    //     'gender' => 'P',
    //     'nis' => '0201033',
    //     'class_id' => 2
    // ]);
    //ELOQUENT ORM:UPDATE findOrFai
    // Student::find(27)->update([
    //     'name' => 'eloquent 2',
    //     'class_id' => 1
    // ]);
    //ELOQUENT ORM:DELETE
    // Student::find(27)->delete(); 
    //Collections
    // $nilai = [4,13,5,6,7,8,9,5,4,57,8,9,8,7,];
    //PHP BIASA
    //1, hitung jumlah nilai
    //2. hitung berapa banyak nilainya
    //3. baru bisa hitung nilai rata-ratanya
    // $countNilai = count($nilai);
    // $totalNilai = array_sum($nilai);
    // $nilaiRataRata = $totalNilai / $countNilai;

    //COLLECTIONS
    //1. hitung rata-rata nilai
    // $nilaiRataRata = collect($nilai)->avg();
    // dd($nilaiRataRata);

    //CONTAINS: cek apakah sebuah array memiliki sesuatu
    // case: apakah ada yang nilainya= 57
    // $aaa = collect($nilai)->contains(function($value){
    //     return $value < 6; 
    // });
    // dd($aaa);

    //DIFF: apakah ada yang tidak dimiliki di nariabel lainnya.
    // $restaurantA = ["Ayam", "Nasi Geprek", "Pindang", "Makaroni", "Siomay", "Ez Teh", "Teh Manis"];

    // $restaurantB = ["Nugget Rebus", "Nasi Geprek", "Pindang", "Makaroni", "Nasi goreng babi", "Ez Teh", "Teh Tawar"];

    // $menuRestoA = collect($restaurantA)->diff($restaurantB);
    // dd($menuRestoA);

    // $menuRestoB = collect($restaurantB)->diff($restaurantA);
    // dd($menuRestoB);

    //FILTER: untuk memproses apakah ada yang dijaringan.
        // $nilai = [4,13,5,6,7,8,9,5,4,57,8,9,8,7,];
        // $aaa = collect($nilai)->filter(function($value) {
        //     return $value > 7;
        // })->all();
        // dd($aaa);

    //PLUCK
    // $biodata = [
    //     ['nama' => 'budi','umur' => 17],
    //     ['nama' => 'ani','umur' => 16],
    //     ['nama' => 'siti','umur' => 17],
    //     ['nama' => 'elly','umur' => 20],
    // ];

    // $aaa = collect($biodata)->pluck('umur');
    // dd($aaa);

    //MAP: Mirip looping
    //case: semua nilai pada array dikali 2
    //komparasi php biasa:
    // $nilai = [4,13,5,6,7,8,9,5,4,57,8,9,8,7,];

    // $nilaikaliDua = [];
    // foreach ($nilai as $value) {
    //     array_push($nilaikaliDua, $value * 2);
    // }
    // dd($nilaikaliDua);

    //pakai Collect
    // $aaa = collect($nilai)->map(function ($value) {
    //     return $value * 2;
    // })->all();
    // dd($aaa);





}
}
