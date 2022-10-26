<div class="card h-100">
    @if($post->images->count() == 1)
        <img src="{{$post->images->first()->path}}" class="card-img-top" alt="...">
    @elseif($post->images->count()>1)
        @include('partials.carousel', ['images' => $post->images, 'id' => "post-$post->id"])
    @endif
    <div class="card-body">
        <h5 class="card-title">{{$post->title}}</h5>
        <p class="card-text">{{$post->snippet}}</p>
    </div>
    <div class="card-footer">
        <a href="#" class="card-link">Card link</a>
    </div>
</div>
