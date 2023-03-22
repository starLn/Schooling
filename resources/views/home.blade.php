@extends('layouts.mainlayout')
@section('title', 'Home')
@section('content')
<h1>Ini halaman home</h1>
<h2>Selamat datang {{Auth::user()->name}}, Anda adalah {{Auth::user()->role->name}}</h2>

@endsection