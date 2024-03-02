<?php

namespace App\Pipeline\Post;

use App\Models\Post;
use Carbon\Carbon;
use Closure;

class IfActual
{
    public function handle(Post $post, Closure $next)
    {
        if ($post->created_at < Carbon::now()->format("Y-m-d")){
            $post->text = 'NOT ACTUAL';
            $post->save();
        }
        return $next($post);
    }
}
