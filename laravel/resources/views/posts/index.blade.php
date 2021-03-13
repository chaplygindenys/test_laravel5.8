<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<h1>Posts</h1>
{{--@foreach($posts as $post)
    <div>

        <span>{{$post->id}}</span>
        <span>{{$post->title}}</span>
        <span>
            {{mb_strtoupper($post->slug)}}
        </span>
    </div>

@endforeach--}}
<table>
<!--   @foreach($posts as $post)
    <tr>
        <td>{{$post->id}}</td>
        <td>{{$post->title}}</td>
        <td><a href="/posts{{$post->id}}">Show more</a></td>
    </tr>
    @endforeach
    @if(!count($posts))
        <div>No posts yet!!!</div>
        @else

        @endif-->

       @forelse($posts as $post)
           <tr>
               <td>{{$post->id}}</td>
               <td>{{$post->title}}</td>
               <td><a href="/posts{{$post->id}}">Show more</a></td>
           </tr>
            @empty <div>No posts yet!!!</div>
       @endforelse
</table>

</body>
</html>
