@extends('layouts.mainlayout')

@section('title', 'Students')
@section('content')

    <h1>Ini Halaman student yang telah dihapus</h1>
    <div class="mt-5">
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Gender</th>
                    <th>NIS</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($student as $data)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $data->name }}</td>
                    <td>{{ $data->gender }}</td>
                    <td>{{ $data->nis }}</td>
                    <td>
                        <a href="student/{{$data->id}}/restore">Restore</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="/students" class="btn btn-primary">Cancel</a>
    </div>

@endsection