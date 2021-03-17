@extends('admin.index')

@section('content')
    <div class="d-flex my-3">
        <h1 class="flex-grow-1">Posts</h1>
        <a class="d-flex align-items-center btn btn-info " href="{{route('posts.create')}}">
            <i class="far fa-plus-square mr-2"></i>Create Post
        </a>
    </div>
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
                <td>
                    <div class="d-flex align-items-center">

                        <a href="{{route('posts.edit',['id'=>$post->id])}}">
                            <i class="fas fa-pencil-alt"></i>
                        </a>
                        <form action="{{route('posts.destroy',['id'=>$post->id])}}" method="POST">
                            @method('DELETE')
                            <button class="btn btn-link">
                                <i class="far fa-trash-alt"></i>
                            </button>
                        </form>

                    </div>
                </td>
            </tr>
        @empty
            <div>No posts yet!!!</div>
        @endforelse
    </table>
@endsection
