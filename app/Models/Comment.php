<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    protected $fillable = ['content', 'post_id', 'parent_comment_id', 'depth'];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_comment_id');
    }

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($comment) {
            $depth = 1;
            if ($comment->parent_comment_id) {
                $parent = Comment::find($comment->parent_comment_id);
                if ($parent) {
                    $depth = $parent->depth + 1;
                    if ($depth > 3) {
                        throw new \Exception('Max nesting depth reached (3)');
                    }
                }
            }
            $comment->depth = $depth;
        });
    }
}
