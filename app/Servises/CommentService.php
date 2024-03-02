<?php

namespace App\Servises;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;

class CommentService
{
    public function create(string $text, Model $model):Comment
    {
        $comment = new Comment();
        $comment->text = $text;
        $comment->commentable_id = $model->id;
        $comment->commentable_type = $model::class;
        $comment->save();

        return $comment;
    }
}
