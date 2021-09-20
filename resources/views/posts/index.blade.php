@extends('layouts.app')

@section('content')

<div class="container posts-container">
  <a href="/posts/create">
    <button type="submit" class="btn btn-primary"><i class="bi bi-plus-square"></i></button>
  </a>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">author</th>
        <th scope="col">abstract</th>
        <th scope="col">comment_user</th>
        <th scope="col">cover</th>
        <th scope="col">like</th>
        <th scope="col">actions</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($allPosts as $post)
          <tr class="post-article">  
              <th scope="row">{{$post->id}}</th>
              <td>{{$post->author}}</td>
              <td>{{$post->abstract}}</td>
              <td>{{$post->comment_user}}</td>
              <td><img src="{{$post->cover}}" alt=""></td>
              <td>{{$post->like}}</td>
              <td>

                <a href="{{ route('posts.show', $post) }}">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                </a>

                <a href="{{ route('posts.edit', $post) }}">
                  <button type="submit" class="btn btn-primary"><i class="bi bi-pencil-square"></i></button>
                </a>
                        
                <form action="{{ route('posts.destroy', $post) }}" method="POST">
                  @csrf
                  @method('DELETE')

                  <button type="submit" class="btn btn-danger"><i class="bi bi-trash"></i></button>
                  
                </form>

              </td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection