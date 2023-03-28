@extends('layouts.mainlayout')
@section('title', 'Students')
@section('content')
<h1>Ini halaman Student</h1>

<div class="my-5 d-flex justify-content-between">
    <a href="students/add" class="btn btn-warning text-white">Add Data</a>
    <a href="/student-deleted" class="btn btn-info text-white">Show with Deleted Data</a>

</div>
@if(Session::has('status'))
    <div class="alert alert-success" role="alert">
        {{Session::get('message')}}
    </div>
@endif

<h3>Ini List Student</h3>
<div class="my-3 col-12 col-sm-8 col-md-4">
    <form action="" method="get">
        <div class="input-group mb-3">
              <input type="text" class="form-control" name="keyword" placeholder="Keyword">
              <button class="input-group-text btn btn-warning text-white">Search</button>
          </div>
    </form>
</div>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>NIS</th>
            <th>Class</th>
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
            <td>{{ $data->class->name }}</td>
            <td>
                @if (Auth::user()->role_id != 1 && Auth::user()->role_id != 2)
                -
                @else
                <a href="student/{{$data->id}}">Detail</a>
                <a href="/student-edit/{{$data->id}}">Edit</a>
                @endif
                @if (Auth::user()->role_id == 1)
                <a href="/student-delete/{{$data->id}}">Delete</a>
                @endif
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
<div class="my-5"></div>
    {{-- withQueryString() == melakukan pencarian di next data table --}}
    {{$studentList->withQueryString()->links()}}
    {{-- <ol>
        @foreach ($studentList as $data)
            <li>{{ $data->name}} | {{ $data->gender}} | {{ $data->nis}}
            </li>
        @endforeach
    </ol> --}}
@endsection