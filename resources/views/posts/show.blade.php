@extends('layouts.app')

@section('content')

<div class="container show-post-container">
    <div>
        <a href="/posts/">List </a>
        <span>> Show-Post</span>
    </div>
    
    <h2>{{$post->author}}</h2>
    <img src="{{$post->cover}}" alt="">

</div>

@endsection