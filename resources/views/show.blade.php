@extends('layouts.app')
@section('content')
    @include('partials.post-card')
    <h3 class="m-4">Comments</h3>
    @foreach($post->comments()->latest()->get() as $comment)
        <div class="card mt-2">
            <div class="card-body">
                <p class="card-text">{{$comment->body}}</p>
            </div>
            <div class="card-footer">
                {{$comment->user->name}}<br>
                {{$comment->created_at->diffForHumans()}}
            </div>
        </div>
    @endforeach
@endsection
