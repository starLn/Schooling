@extends('layouts.mainlayout')
@section('title', 'Students')
@section('content')
<h1>Ini halaman Student</h1>
<h3>Ini List Student</h3>

<table class="table">
    <thead>
        <tr>
            <th>#</th>
            <th>Name</th>
            <th>Gender</th>
            <th>NIS</th>
            {{-- <th>Class id</th> --}}
            <th>Class</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($studentList as $data)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $data->name }}</td>
            <td>{{ $data->gender }}</td>
            <td>{{ $data->nis }}</td>
            <td>{{ $data->class['name'] }}</td>
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