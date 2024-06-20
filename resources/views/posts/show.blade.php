<!-- resources/views/posts/show.blade.php -->
@extends('layouts.app')

@section('content')
    <div>
        <h1>{{ $post->title }}</h1>
        <p>{{ $post->content }}</p>
        <p><strong>Author:</strong> {{ $post->author }}</p>
        <p><strong>Published At:</strong> {{ $post->published_at }}</p>
    </div>
    <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary">Edit</a>
    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
    </form>
    <a href="{{ route('posts.index') }}" class="btn btn-secondary">Back to List</a>
@endsection
