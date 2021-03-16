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
            <h1>Post </h1>
            <p>{{$post->title}}</p>
        <hr />
            <form action="{{route('posts.update', ['id'=>$post->id])}}" method="POST">
                @method('PUT')
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="text" class="form-control" id="title"  value="{{$post->title}}" name="title" >
                </div>

                <div class="form-group">
                    <label for="body">Post body:</label>
                    <textarea class="form-control" id="body" rows="3" name="body">{{$post->body}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
            </form>
        </div>
    </div>
</div>
<script src="{{asset('js/app.js')}}"></script>
</body>
</html>
