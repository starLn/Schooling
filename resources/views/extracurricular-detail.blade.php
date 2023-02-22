@extends('layouts.mainlayout')
@section('title', 'Class')
@section('content')

    <h2>Detailed Extracurricular page from |  {{$ekskul->name}}</h2>

    <div class="mt-5">
        <h5>Student List</h5>
        <ol>
            @foreach ($ekskul->students as $item)
                <li>{{$item->name}}</li>
            @endforeach
        </ol>
    </div>

@endsection