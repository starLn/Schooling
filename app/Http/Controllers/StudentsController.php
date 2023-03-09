<?php

namespace App\Http\Controllers;

use App\Http\Requests\StudentCreateRequest;
use App\Models\Student;
use App\Models\ClassRoom;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class StudentsController extends Controller
{
    public function index(Request $request)
    {
    $keyword = $request->keyword;
    // $nama = "budi";
    //orm:
    //searching  
    $student = Student::with('class')
    ->where('name', 'LIKE', '%'.$keyword.'%')
    ->orWhere('gender', $keyword)
    ->orWhere('nis','LIKE','%'.$keyword.'%')
    ->orWhereHas('class', function($query) use($keyword) {
        $query->where('name','LIKE', '%'.$keyword.'%');
    })
    ->paginate(15);
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
    public function show($id)
    {
        // dd($id);
        $student = Student::with(['class.homeroomTeacher', 'extracurriculars'])->findOrFail($id);
        return view('student-detail', ['student' => $student]);
        
    }
    public function create()
    {
        $class = ClassRoom::select('id','name')->get();
        return view('student-add', ['class' =>$class]);   
    }
    // Request $request: untuk menampung parameter yang dikirim 
    public function store(StudentCreateRequest $request)
    {
        // dd($request->all());

        // simpan data satu satu
        // $request->gender
        // Student= nama tabel
        // $student = new Student;
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();

        //validation input
        //students: nama tabel
        // $validated = $request->validate([
        //     'nis' => 'unique:students|max:8|required',
        //     'name' => 'max:20|required',
        //     // 'gender' => 'required',
        //     // 'class_id' => 'required'
        // ]);

        //mass assignment
        $student =Student::create($request->all());
        $extension = $request->file('photo')->getClientOriginalExtension();
        $newName = $request->name.$request->nis.'-'.now()->timestamp.'.'.$extension;
        return $request->file('photo')->storeAs('photo',$newName);
        

        // if ($student) {
        //     Session()->flash('status', 'success');
        //     Session()->flash('message', 'Adding success!');
        // }
        // return redirect('/students');
    }
    public function edit(Request $request, $id)
    {
        $student = Student::with('class')->findOrFail($id);
        // dd($student);
        // '!=' = ! dan =
        $class = ClassRoom::where('id', '!=', $student->class_id)->get(['id','name']);
        return view('student-edit', ['student' =>$student, 'class'=> $class]);
    }
    public function update(Request $request, $id)
    {
       $student = Student::findOrFail($id);
    //    dd($student); 
        // $student->name = $request->name;
        // $student->gender = $request->gender;
        // $student->nis = $request->nis;
        // $student->class_id = $request->class_id;
        // $student->save();
        $student->update($request->all());
        return redirect('/students');
    }

    public function delete($id)
    {
        $student = Student::findOrFail($id);
        return view('student-delete', ['student' =>$student]);
    }
    public function destroy($id)
    {
        // dd($id);


        //QUERY BUILDER
        // $deleteStudent = DB::table('students')->where('id',$id)->delete();

        //Eloquent
        $deletedStudent = Student::findOrFail($id);
        $deletedStudent->delete();
        if ($deletedStudent) {
            Session()->flash('status', 'success');
            Session()->flash('message', 'Delete success!');
        }
        return redirect('/students');
    }
    public function deletedStudent()
    {
        $deletedStudent= Student::onlyTrashed()->get();
        // dd($deletedStudent);
        return view('student-deleted-list', ['student' =>$deletedStudent]);
    }
    public function restore($id)
    {
        $deletedStudent = Student::withTrashed()->where('id',$id)->restore();
        if ($deletedStudent) {
            Session()->flash('status', 'success');
            Session()->flash('message', 'Restore success!');
        }
        return redirect('/students');
    }
}
 