<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-3 sidebar">
          <ul class="sidebar-menu list-unstyled">
              <li class="sidebar-menu-item" ><a class="sidebar-menu-link" href="{{route('posts.index')}}">Posts</a></li>
              <li class="sidebar-menu-item" ><a class="sidebar-menu-link" href="#">Users</a></li>
          </ul>


        </div>
        <div class="col-9">
            <h1>Posts</h1>
            <table class="table">
                <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>Actions</th>
                </tr>
                </thead>
                @forelse($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td><a href="{{route('posts.edit',['id'=>$post->id])}}">Edit</a></td>
                    </tr>
                @empty
                    <div>No posts yet!!!</div>
                @endforelse
            </table>
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
