<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostCreateRequest;
use Illuminate\Http\Request;

use App\Serviсes\PostService;
use App\Models\Post;


class PostController extends Controller
{
    public function create (PostCreateRequest $request, PostService $service): Post
    {
        return $service->create($request->topic, $request->text, $request->user_id, $request->comment);
    }

    public function validatePost (int $post_id, PostService $service): Post
    {
        return $service->validatePost(Post::find($post_id));
    }

    public function postDataCreate (int $post_id, PostService $service): string
    {
        return $service->getExternalPost();
    }

    public function postDataCreate2 (PostService $service): array
    {
        return $service->getExternalPost2();
    }

}
