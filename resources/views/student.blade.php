@extends('layouts.mainlayout')
@section('title', 'Students')
@section('content')
<h1>Ini halaman Student</h1>

<div class="my-5">
    <a href="students/add" class="btn btn-warning text-white">Add Data</a>
</div>

<h3>Ini List Student</h3>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>NIS</th>
            <th>Action</th>
            {{-- <th>Class id</th> --}}
            {{-- <th>Class</th>
            <th>Extracurricular</th>
            <th>Teacher</th> --}}
        </tr>
    </thead>
    <tbody>
        @foreach ($studentList as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->gender }}</td>
            <td>{{ $data->nis }}</td>
            <td>
                <a href="student/{{$data->id}}">Detail</a>
                <a href="/student-edit/{{$data->id}}">Edit</a>
            </td>
            {{-- <td>{{ $data->class['name'] }}</td>
            <td>@foreach ($data ->extracurriculars as $item)
                ~ {{$item->name}} <br>
            @endforeach</td>
            <td>{{$data->class->homeroomTeacher['name']}}</td> --}}
            {{-- <td>{{$data['extracurriculars']}}</td> = PAKAI ARRAY--}}
            {{-- <td>{{ $data->class['name']}}</td> --}}

        </tr>
        @endforeach
    </tbody>
</table>
    {{-- <ol>
        @foreach ($studentList as $data)
            <li>{{ $data->name}} | {{ $data->gender}} | {{ $data->nis}}
            </li>
        @endforeach
    </ol> --}}
@endsection