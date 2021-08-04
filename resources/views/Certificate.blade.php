@extends('layouts.main')

@section('container')
    <h1>Halaman Certificate<h1>
    <h3>{{ $nama }}</h3>
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="200"> <!--gambar-->
@endsection