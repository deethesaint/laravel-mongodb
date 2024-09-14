<div>
    @foreach ($posts as $post)
        <p>{{$post->title}}</p>
        <br>
        <p>{{$post->author}}</p>
        <br>
        <p>{{$post->content}}</p>
    @endforeach
</div>
