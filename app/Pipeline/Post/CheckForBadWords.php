<?php

namespace App\Pipeline\Post;

use App\Models\Post;
use Closure;

class CheckForBadWords
{
    public function handle(Post $post, Closure $next)
    {
        if (str_contains($post->text, 'bad_words')){
            $post->text = 'THIS IS BAD WORDS';
            $post->save();
        }
        return $next($post);
    }
}
