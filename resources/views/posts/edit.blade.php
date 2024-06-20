<!-- resources/views/posts/edit.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Edit Post</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required>{{ $post->content }}</textarea>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author" value="{{ $post->author }}">
        </div>
        <div class="form-group">
            <label for="published_at">Published At</label>
            <input type="date" class="form-control" id="published_at" name="published_at" value="{{ $post->published_at }}">
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
    </form>
@endsection
