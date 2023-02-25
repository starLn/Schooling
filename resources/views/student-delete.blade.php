@extends('layouts.mainlayout')
@section('title', 'Students')
@section('content')

    <div class="mt-5">
        <h2>Are you sure to delete data: {{$student->name}} ~ {{$student->nis}}</h2>
        <form action="/student-destroy/{{$student->id}}" method="post" style="display: inline-block">
            @method('delete')
            @csrf
        <button type="submit" class="btn btn-success">Delete</button>
        </form>
        <a href="/students" class="btn btn-primary">Cancel</a>
    </div>

@endsection