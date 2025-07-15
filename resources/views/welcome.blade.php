@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-3">

    {{-- Main Heading Centered --}}
    <div class="text-center mb-4">
        <h1 class="text-primary fw-bold">Multi-Level Commenting System with Recursive Depth Check</h1>
    </div>

    {{-- Subheading Row: All Posts + Create Button --}}
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h3 class="text-dark">All Posts</h3>
        <a href="{{ route('posts.create') }}" class="btn btn-success">+ Create Post</a>
    </div>

    {{-- Posts List --}}
    @forelse ($posts as $post)
        <div class="card mb-3 shadow-sm border-0" style="background-color: #f8f9fa;">
            <div class="card-body">
                <h5 class="card-title text-dark mb-2">{{ $post->title }}</h5>
                <p class="card-text text-muted">{{ Str::limit($post->content, 100) }}</p>
                <a href="{{ route('posts.show', $post->id) }}" class="btn btn-sm btn-outline-primary">📄 View Full Post</a>
            </div>
        </div>
    @empty
        <div class="alert alert-info">
            No posts yet. <a href="{{ route('posts.create') }}">Create one now</a>!
        </div>
    @endforelse

</div>
@endsection
