<!-- resources/views/posts/create.blade.php -->
@extends('layouts.app')

@section('content')
    <h1>Create Post</h1>
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <div class="form-group">
            <label for="author">Author</label>
            <input type="text" class="form-control" id="author" name="author">
        </div>
        <div class="form-group">
            <label for="published_at">Published At</label>
            <input type="date" class="form-control" id="published_at" name="published_at">
        </div>
        <button type="submit" class="btn btn-primary">Create</button>
    </form>
@endsection
