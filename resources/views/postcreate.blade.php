<div style="padding: 10px">
    <form action="{{route('posts.store')}}" method="post">
        @csrf
        <label for="title">Title</label>
        <input type="text" id="title" name="title">
        <br>
        <label for="author">Author</label>
        <input type="text" id="author" name="author">
        <br>
        <label for="content">Content</label>
        <input type="text" id="content" name="content">
        <br>
        <button type="submit">Submit</button>
    </form>
</div>
