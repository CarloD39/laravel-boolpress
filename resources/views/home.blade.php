@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                </div>
            </div>
        </div>
    </div>
</div>


<div class="container">
    <div class="row">
        @foreach($allPosts as $post)
                <div class="card col-md-4">
                    <div class="card-picture">
                        <img class="post-picture" src="{{$post->cover}}" alt="">
                    </div>
                    <div class="description-post">
                        <h3 class="title-author">{{$post->author}}</h3>
                        <span class="status-post">{{$post->status}}</span>
                        <p class="about">{{$post->abstract}}</p>
                        <span>{{$post->like}}</span>
                        <p class="comment">{{$post->comment_user}}</p>
                    </div>
                    <div class="action-post">
                        <a href="{{ route('posts.show', $post) }}">
                            <button type="submit" class="btn btn-primary"><i class="bi bi-search"></i></button>
                        </a>                 
                    </div>        
                </div>                                               
        @endforeach
    </div>
</div>
            
                
                    
                
            
        
    

@endsection
