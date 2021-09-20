@extends('layouts.app')

@section('content')

<div class="container posts-container">

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf

        <div class="form-group">

            <label for="author">Author</label>
            <input type="text" class="form-control" name="author" id="author">

        </div>
        
        <div class="form-group">

            <label for="abstract">Abstract</label>
            <input type="text" class="form-control" name="abstract" id="abstract">

        </div>

        <div class="form-group">

            <label for="status">Status</label>
            <input type="text" class="form-control" name="status" id="status">

        </div>

        <div class="form-group">

            <label for="cover">Cover</label>
            <input type="text"  class="form-control" name="cover" id="cover" src="">

        </div>

        <div class="form-group">

            <label for="comment_user">Comment_user</label>
            <input type="text" class="form-control" name="comment_user" id="comment_user">

        </div>

        <div class="form-group">

            <label for="like">Like</label>
            <input type="number" min="1" max="999.999"  class="form-control" name="like" id="like">

        </div>

        <input type="submit" value="Save">




    </form>

</div>

@endsection
