@extends('layouts.post')
@section('content')
    <div class="container">
        <h1 class="text-center">Add Post</h1>
       
        <form action="{{ route('posts.store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="title">Title :</label>
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter title">
            </div>
            <div class="form-group">
                <label for="content">Content :</label>
                <textarea class="form-control" id="content" placeholder="Enter content" required name="content"></textarea>
            </div>
            <div class="form-group button-action">
                <a href="{{ route('posts.index') }}" class="btn btn-primary">Back</a>
                <input type="submit" class="btn btn-primary" value="Add">
            </div>
        </form>

    </div>
@endsection