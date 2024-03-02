<?php

namespace App\Pipeline\Post;

use App\Models\Post;
use Closure;

class CheckForPlagiate
{
    public function handle(Post $post, Closure $next)
    {
        if (str_contains($post->text, 'Slavik')){
            $post->text = 'PLAGIATE';
            $post->save();
        }
        return $next($post);
    }
}
