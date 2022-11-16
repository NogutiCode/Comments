<div class="card h-100">
    @if($post->images->count() == 1)
        <img src="{{$post->images->first()->path}}" class="card-img-top" alt="...">
    @elseif($post->images->count()>1)
        @include('partials.carousel', ['images' => $post->images, 'id' => "post-$post->id"])
    @endif
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        @if(request()->route()->getName() != 'show')
            <p class="card-text">{{$post->snippet}}</p>
            <a href="{{route('show', ['post'=>$post])}}" class="btn btn-primary">Read more</a>
        @else
            <p class="card-text">{{$post->body}}</p>
        @endif

    </div>
    <div class="card-footer">
        {{$post->user->name}}<br>
        {{$post->created_at->diffForHumans()}}
    </div>
</div>
