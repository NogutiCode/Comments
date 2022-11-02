@extends('layouts.app')

@section('content')
    <div class="container">
        
        <div class="mb-3">
            <label for="title" class="form-label">Title</label>
            <input type="text" class="form-control" id="title" placeholder="Title">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Content</label>
            <textarea class="form-control" id="body" rows="12"></textarea>
        </div>
    </div>
@endsection
