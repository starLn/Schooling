@extends('layouts.mainlayout')
@section('title', 'Students')
@section('content')
<h1>Ini halaman Class</h1>
<h3>Class List </h3>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Students</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($classList as $data)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->name}}</td>
        {{-- karena name-nya banyak tidak bisa disebut spesifik harus pakai foreach--}}
        {{-- <td>{{$data->students['name']}}</td> --}}
        <td>
            @foreach($data->students as $student)
            - {{$student->name}} <br>
            {{-- {{$student->name}} <br> || DALAM PANAH--}}
            {{-- {{$student['name']}} <br> || DALAM ARRAY--}}
            @endforeach
        </td>
        </tr>    
        @endforeach
    </tbody>
</table>
    
@endsection