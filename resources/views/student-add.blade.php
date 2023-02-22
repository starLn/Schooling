@extends('layouts.mainlayout')
@section('title', 'Students | New')
@section('content')
<div class="mt-5 col-8 m-auto">
    <form action="added" method="post">
        @csrf
        <div class="mb-3">
            <label for="name">Name</label>
            <input type="text " class="form-control" name= "name" id="name" required>
        </div>
        <div class="mb-3">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
                <option value="">Select one</option>
                <option value="L">L</option>
                <option value="P">P</option>
            </select>
        </div>
        <div class="mb-3">
            <label for="nis">NIS</label>
            <input type="text " class="form-control" name="nis" id="nis" required>
        </div>
        <div class="mb-3">
            <label for="class">Class</label>
            <select name="class_id" id="class" class="form-control" required>
                <option value="">Select one</option>
                @foreach ($class as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <button class="btn btn-warning" type="submit">Simpan</button>
        </div>
    </form>
</div>

@endsection