@extends('admin.index')

@section('content')
            <h1>New Post</h1>
        <hr />
            <form action="{{route('posts.store')}}" method="POST">
                @CSRF
                <div class="form-group">
                    <label for="title">Post title</label>
                    <input type="text" class="form-control" id="title"  value="" name="title" >
                </div>

                <div class="form-group">
                    <label for="body">Post body:</label>
                    <textarea class="form-control" id="body" rows="3" name="body"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">Create</button>
                <a href="{{route('posts.index')}}" class="btn btn-info">Back</a>
            </form>
@endsection
