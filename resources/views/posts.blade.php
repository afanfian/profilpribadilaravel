@extends('layouts\main')

@section('container')
<article class = "mb-5">
    @foreach ($posts as $post) <!--looping dari punyanya blade-->
    <h2><a href="/posts/{{ $post-> slug }}">{{ $post -> title }}</a></h2>
    <p>{{ $post -> excerpt }}</p>
</article>
    @endforeach
@endsection