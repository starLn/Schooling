@extends('layouts.mainlayout')
@section('title', 'Students')
@section('content')
<h1>Ini halaman Student</h1>
<h3>Ini List Student</h3>
    <ol>
        @foreach ($studentList as $data)
            <li>{{ $data->name}} | {{ $data->gender}} | {{ $data->nis}}
            </li>
        @endforeach
    </ol>
@endsection