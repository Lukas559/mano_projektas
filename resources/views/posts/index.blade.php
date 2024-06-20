@extends('layouts.app')

@section('content')
    <h1>Posts</h1>
    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Create New Post</a>
    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    <ul class="list-group">
        @forelse ($posts ?? [] as $post)
            <li class="list-group-item">
                <h4>{{ $post->title }}</h4>
                <p>{{ $post->content }}</p>
                <div>
                    <a href="{{ route('posts.show', $post) }}" class="btn btn-info btn-sm">View</a>
                    <a href="{{ route('posts.edit', $post) }}" class="btn btn-primary btn-sm">Edit</a>
                    <form action="{{ route('posts.destroy', $post) }}" method="POST" class="d-inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this post?')">Delete</button>
                    </form>
                </div>
            </li>
        @empty
            <li class="list-group-item">No posts found.</li>
        @endforelse
    </ul>
@endsection
