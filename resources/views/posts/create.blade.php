@extends('layouts.app')

@section('content')
<div class="container mt-5 pt-3">
    
    <div class="text-center mb-4">
        <h2 class="text-primary fw-bold"> Create New Post</h2>
        <p class="text-muted">Add a new post with a title and content.</p>
    </div>

    <div class="card shadow-sm border-0" style="background-color: #f8f9fa;">
        <div class="card-body">
            <form action="{{ route('posts.store') }}" method="POST">
                @csrf

                <div class="mb-3">
                    <label for="title" class="form-label fw-semibold">Title</label>
                    <input type="text" name="title" id="title" class="form-control" required>
                </div>

                <div class="mb-3">
                    <label for="content" class="form-label fw-semibold">Content</label>
                    <textarea name="content" id="content" rows="5" class="form-control" required></textarea>
                </div>

                <button type="submit" class="btn btn-success">Submit</button>
            </form>
        </div>
    </div>

</div>
@endsection
