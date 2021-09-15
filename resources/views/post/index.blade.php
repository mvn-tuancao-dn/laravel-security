@extends('layouts.post')
@section('content')
    <div class="container">
        <h1 class="text-center">List Post</h1>
        <a href="{{ route('posts.create') }}"><button type="button" class="btn btn-primary mb-5">Add Post</button></a>
        
        <table class="table table-bordered table-striped">
            <thead>
                <tr class="text-center">
                    <th>STT</th>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($listPost as $key => $post)
                <tr class="text-center">
                    <td>{{ $key+1}}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->content }}</td>
                    <td>
                        <a href="{{ route('posts.edit', $post->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                        <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection