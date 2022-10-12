@extends('layout')
@section('content')
    <h1>Hello, world!</h1>
    <ul>
        @foreach($posts as $post)
            <li>{{ $post->title }}</li>
        @endforeach
    </ul>
@endsection
