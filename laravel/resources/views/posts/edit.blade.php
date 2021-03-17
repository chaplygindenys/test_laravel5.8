@extends('admin.index')

@section('content')
            <h1>Post </h1>
            <p>{{$post->title}}</p>
        <hr />
            <form action="{{route('posts.update', ['id'=>$post->id])}}" method="POST">
                @method('PUT')
                @CSRF
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="text" class="form-control" id="title"  value="{{$post->title}}" name="title" >
                </div>

                <div class="form-group">
                    <label for="body">Post body:</label>
                    <textarea class="form-control" id="body" rows="3" name="body">{{$post->body}}</textarea>
                </div>

                <button type="submit" class="btn btn-primary">Update</button>
                <a href="{{route('posts.index')}}" class="btn btn-info">Back</a>
            </form>
@endsection
