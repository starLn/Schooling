@extends('layouts.mainlayout')
@section('title', 'Class')
@section('content')
<h1>Ini halaman Class</h1>
<div class="my-5">
    <a href="" class="btn btn-warning text-white">Add Data</a>
</div>
<h3>Class List </h3>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Action</th>
            {{-- <th>Students</th>
            <th>Homeroom Teacher</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($classList as $data)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->name}}</td>
        <td><a href="class-detail/{{$data->id}}">Detail</a></td>
        {{-- karena name-nya banyak tidak bisa disebut spesifik harus pakai foreach--}}
        {{-- <td>{{$data->students['name']}}</td> --}}
        {{-- <td>
            @foreach($data->students as $student)
            - {{$student->name}} <br> --}}
            {{-- {{$student->name}} <br> || DALAM PANAH--}}
            {{-- {{$student['name']}} <br> || DALAM ARRAY--}}
            {{-- @endforeach
        </td> --}}
        {{-- homeroomTeacher= nama relasi di class controller --}}
        {{-- <td>{{$data->homeroomTeacher['name']}}</td> --}}
        </tr>    
        @endforeach
    </tbody>
</table>
    
@endsection