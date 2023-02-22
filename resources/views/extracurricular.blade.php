@extends('layouts.mainlayout')

@section('title', 'Extracurricular')
@section('content')
<h1>Ini halaman Extracurricular</h1>
<div class="my-5">
    <a href="" class="btn btn-warning text-white">Add Data</a>
</div>
<h3>Extracurricular List</h3>

<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>Name</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($ekskulList as $data)
        <tr>
        <td>{{$loop->iteration}}</td>
        <td>{{$data->name}}</td>
        <td><a href="extracurricular-detail/{{$data->id}}">Detail</a></td>
        {{-- <td>@foreach ($data ->students as $item)
            ~ {{$item->name}} <br>
        @endforeach</td> --}}
        </tr>    
        @endforeach
    </tbody>
</table>
@endsection