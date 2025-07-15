@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-3">

    <div class="card mb-4 shadow-sm border-0" style="background-color: #f8f9fa;">
        <div class="card-body">
            <h2 class="text-primary">{{ $post->title }}</h2>
            <p class="text-muted">{{ $post->content }}</p>
        </div>
    </div>

    <div class="mb-4">
        <h4 class="text-secondary">💬 Comments</h4>

        @include('posts.partials.comment-tree', ['comments' => $post->comments])
    </div>

    <div class="card shadow-sm border-0">
        <div class="card-body">
            <form method="POST" action="{{ route('comments.store') }}">
                @csrf
                <input type="hidden" name="post_id" value="{{ $post->id }}">
                <div class="mb-3">
                    <label for="content" class="form-label fw-semibold">Add a Comment</label>
                    <textarea name="content" id="content" class="form-control" rows="3" placeholder="Write your comment here..." required></textarea>
                </div>
                <button type="submit" class="btn btn-success">➕ Post Comment</button>
            </form>
        </div>
    </div>

</div>
@endsection
