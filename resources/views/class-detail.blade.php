@extends('layouts.mainlayout')
@section('title', 'Students')
@section('content')

    <h2>Detailed class page from |  {{$class->name}}</h2>

    <div class="mt-5">
        <h4><strong>Homeroom Teacher: </strong>{{$class->homeroomTeacher->name}}</h4>
    </div>
    <div class="mt-5">
        <h5>Student List</h5>
        <ol>
            @foreach ($class->students as $item)
                <li>{{$item->name}}</li>
            @endforeach
        </ol>
    </div>

@endsection