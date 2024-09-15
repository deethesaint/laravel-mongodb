@extends('layouts.app')
@section('content')
    <div class="w-full">
        <form action="/posts/update" method="post">
            @csrf
            <table class="w-full m-3 p-3">
                <tr>
                    <td>Id</td>
                    <td>
                        <input class="w-24 border border-gray-700 rounded-lg" type="text" name="_id" value="{{$post->_id}}" readonly>
                    </td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>
                        <input class="w-24 border border-gray-700 rounded-lg" type="text" name="title" value="{{$post->title}}">
                    </td>
                </tr>
                <tr>
                    <td>Author</td>
                    <td>
                        <input class="w-24 border border-gray-700 rounded-lg" type="text" name="author" value="{{$post->author}}">
                    </td>
                </tr>
                <tr>
                    <td>Title</td>
                    <td>
                        <textarea class="w-full h-20 border border-gray-700 rounded-lg" name="content">{{$post->content}}</textarea>
                    </td>
                </tr>
                <tr>
                    <td colspan="3" class="text-center">
                        <button class="h-8 w-20 bg-blue-400 hover:bg-blue-600 rounded-lg border border-gray-600">Submit</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
@endsection
