@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="#" class="btn btn-primary">Add Post</a>
       {{$posts->links()}}
        <table class="table table-striped table-hover">
            <thead>
                <th>ID</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </thead>

            <tbody>
                @foreach($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->created_at}}</td>
                        <td>{{$post->updated_at}}</td>
                        <td>
                            <div class="btn-group">
                                <a href="#" class="btn btn-info">View</a>
                                <a href="#" class="btn btn-warning">Edit</a>
                                <a href="#" class="btn btn-danger">Delete</a>
                            </div>
                        </td>
                    </tr>
                @endforeach
            </tbody>

            <tfoot>
                <th>ID</th>
                <th>Title</th>
                <th>Created At</th>
                <th>Updated At</th>
                <th>Actions</th>
            </tfoot>
        </table>
        {{$posts->links()}}
    </div>
@endsection
