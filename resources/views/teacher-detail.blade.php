@extends('layouts.mainlayout')
@section('title', 'Teacher')
@section('content')

    <h2>Detailed teacher page from |  {{$teacher->name}}</h2>

    <div class="mt-5">
        <h3>Class : 
        @if ($teacher->class)
            {{$teacher->class->name}}
            <div class="mt-5">
                <h5>Student List</h5>
                <ol>
                    @foreach ($teacher->class->students as $item)
                        <li>{{$item->name}}</li>
                    @endforeach
                </ol>
            </div>
        @else 
        KAGAK NGAJAR KELAS, CUY!
        @endif</h3>
    </div>
@endsection