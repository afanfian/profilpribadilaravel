@extends('layouts.main')

@section('container')
    <h1>Halaman About<h1>
    <h3>{{ $nama }}</h3> <!--nama dari route-->
    <p>{{ $email }}</p> <!--email dari route-->
    <img src="img/{{ $image }}" alt="{{ $nama }}" width="200"> <!--gambar-->
@endsection
 
