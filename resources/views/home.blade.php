<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
       @foreach($allPosts as $post)
            <div>
                <h1>{{$post->author}}</h1>
                <span>{{$post->status}}</span>
                <div>{{$post->abstract}}</div>
                <img src="{{$post->cover}}" alt="">
                <div>{{$post->like}}</div>
                <div>{{$post->comment_user}}</div>
            </div> 
       @endforeach
    
</body>
</html>