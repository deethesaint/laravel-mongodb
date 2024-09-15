
@extends('layouts.app')
@section('content')
<div style="padding: 10px">

    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <label for="title">Title</label>
        <input class="border border-black w-40 my-3" type="text" id="title" name="title">
        <br>
        <label for="author">Author</label>
        <input class="border border-black w-40 my-3" type="text" id="author" name="author">
        <br>
        <label for="content">Content</label>
        <input class="border border-black w-40 my-3" type="text" id="content" name="content">
        <br>
        <button class="border rounded-xl w-20 bg-red-400 my-3" type="submit">Submit</button>
    </form>
</div>
@endsection
