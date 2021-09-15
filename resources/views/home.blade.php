@extends('layouts.app')

@section('content')
<div class="container text-center">
    <h1>Home Page</h1>
    <a href="{{ route('posts.index') }}"><h3>List Post</h3></a>
</div>
@endsection
