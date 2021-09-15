@extends('layouts.post')
@section('content')
    <div class="container">
        <h1 class="text-center">Update Post</h1>
       
        <form action="{{ route('posts.update', $posts->id) }}" method="POST">
            @method('PUT')
            @csrf
            <div class="form-group">
                <label for="title">Title :</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title" value="{{ $posts->title}}">
            </div>
            <div class="form-group">
                <label for="content">Content :</label>
                <textarea class="form-control" id="content" placeholder="Enter content" required name="content">{{ $posts->content }}</textarea>
            </div>
            <div class="form-group button-action">
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
                <input type="submit" class="btn btn-primary" value="Update">
            </div>
        </form>

    </div>
@endsection