@foreach ($comments as $comment)
    <div class="ms-{{ $comment->depth * 2 }} mt-2">
        <div class="border p-2">
            <p>{{ $comment->content }}</p>

            @if ($comment->depth < 3)
                <form method="POST" action="{{ route('comments.store') }}" class="mt-1">
                    @csrf
                    <input type="hidden" name="post_id" value="{{ $comment->post_id }}">
                    <input type="hidden" name="parent_comment_id" value="{{ $comment->id }}">
                    <textarea name="content" class="form-control form-control-sm" placeholder="Reply..."></textarea>
                    <button class="btn btn-sm btn-outline-primary mt-1">Reply</button>
                </form>
            @endif

            @if ($comment->replies)
                @include('posts.partials.comment-tree', ['comments' => $comment->replies])
            @endif
        </div>
    </div>
@endforeach
