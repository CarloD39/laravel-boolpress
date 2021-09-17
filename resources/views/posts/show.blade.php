@extends('layouts.app')

@section('content')

<div class="container show-post-container">
    
    <h2>{{$post->author}}</h2>
    <img src="{{$post->cover}}" alt="">

</div>

@endsection