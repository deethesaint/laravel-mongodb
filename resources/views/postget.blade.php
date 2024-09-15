@extends('layouts.app')
@section('content')
    <div>
        <div class="text-end">
            <a href="/posts/create">
                <button class="bg-blue-400 h-10 w-20 rounded-xl hover:bg-blue-600 my-3">Add</button>
            </a>
        </div>
        <table class="w-full table-auto border">
            <thead class="bg-gray-300">
            <tr>
                <th>Title</th>
                <th>Author</th>
                <th>Content</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($posts as $post)
                @if ($post->title)
                <tr class="text-center border-b">
                    <td>{{$post->title}}</td>
                    <td>{{$post->author}}</td>
                    <td>{{$post->content}}</td>
                    <td>
                        <a href="/posts/edit/{{$post->_id}}">
                            <button class="bg-green-400 h-10 w-20 rounded-xl hover:bg-green-600 my-3">Update</button>
                        </a>
                        <a href="/posts/destroy/{{$post->_id}}">
                            <button class="bg-red-400 h-10 w-20 rounded-xl hover:bg-red-600 my-3">Delete</button>
                        </a>
                    </td>
                </tr>
                @endif
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
