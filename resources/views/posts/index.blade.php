@extends('layouts.app')

@section('content')

<div class="container posts-container">
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
          <tr>  
              <th scope="row">{{$post->id}}</th>
              <td>{{$post->author}}</td>
              <td>{{$post->abstract}}</td>
              <td>{{$post->comment_user}}</td>
              <td><img src="{{$post->cover}}" alt=""></td>
              <td>{{$post->like}}</td>
              <td><a href="/posts/{{$post->id}}"><i class="bi bi-search"></i></a></td>
          </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection