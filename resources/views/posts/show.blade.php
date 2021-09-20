@extends('layouts.app')

@section('content')

<div class="container show-post-container ">
    <div>
        <a href="/posts/">List </a>
        <span>> Show-Post</span>
    </div>
    
    <div>
        <img src="{{$post->cover}}" alt=""> 
    </div>

    <div>
        <h2>{{$post->author}}</h2>
        <p class="about">{{$post->abstract}}</p>
    </div>

    @if(Auth::check())
    <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
    @endif
    
</div>

@endsection