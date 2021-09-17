@extends('layouts.app')

@section('content')

<div class="container posts-container">

    <form action="{{ route(posts.store) }}" method="POST">
        @csrf

        <input type="text" name="author" id="author"> 



    </form>

</div>

@endsection
