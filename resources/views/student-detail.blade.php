@extends('layouts.mainlayout')
@section('title', 'Students')
@section('content')

    <h2>Detailed student page from |  {{$student->name}}</h2>

    <div class="my-3 d-flex justify-content-center">
        @if($student->image != '')
        <img src="{{asset('storage/photo/'.$student->image)}}" alt="" width="200px">
        @else
        <img src="{{asset('images/user.png')}}" alt="" width="200px">
        @endif
    </div>

    <div class="mt-5 mb-5">
    <table class="table table-bordered">
        <tr>
            <th>NIS</th>
            <th>Gender</th>
            <th>Kelas</th>
            <th>Wali Kelas</th>
            <th>Ekstrakurikuler</th>
        </tr>
        <tr>
            <td>{{$student->nis}}</td>
            <td>
                @if ($student->gender == 'P')
                    Perempuan
                @else 
                    Laki laki
                @endif
            </td>
            <td>{{$student->class->name}}</td>
            <td>{{$student->class->homeroomTeacher->name}}</td>
            <td>@foreach ($student ->extracurriculars as $item)
                - {{$item->name}} <br>
            @endforeach</td>

        </tr>
    </table>
</div>
    <h3>Extracurriculars: </h3>
    <ol>
        @foreach ($student ->extracurriculars as $item)
        <li>{{$item->name}}</li>    
        @endforeach
    </ol>
<div>

</div>

    {{-- {{$student}} --}}
    <style>
        th {
            width: 25%
        }
    </style>


@endsection