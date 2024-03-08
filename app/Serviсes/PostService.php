<?php

namespace App\Serviсes;

use App\Api\ExampleGazzle;
use App\Api\PostDataCreate;
use App\Jobs\CreatePostJob;
use App\Models\Post;
use App\Pipeline\Post\CheckForBadWords;
use App\Pipeline\Post\CheckForPlagiate;
use App\Pipeline\Post\IfActual;
use App\Traits\NaturePost;
use App\Traits\NewsPost;
use Illuminate\Pipeline\Pipeline;

class PostService
{
    use NewsPost, NaturePost
    {
        NewsPost::getPost insteadof NaturePost;
    }

    public string $post = "10";
	public function create(string $topic, string $text, int $user_id, string $comment = null): Post
	{
//        dispatch(new CreatePostJob($topic, $text, $user_id, $comment))->onQueue('Posts');
		 $new_post = new Post();
		 $new_post->topic = $topic;
		 $new_post->text = $text;
         $new_post->user_id = $user_id;
         $new_post->save();

//        $new_post = Post::create([
//            'topic' => $topic,
//            'text' => $text,
//            'user_id' => $user_id,
//        ]);

         if($comment)
         {
             $service = app(CommentService::class);
             $service->create($comment, $new_post);
         }

		 return $new_post->fresh();


	}

    public function getPostsByUser(int $user_id): Post
    {
         $new_post = new Post();
         $new_post->topic = $topic;
         $new_post->text = $text;

         return $new_post;

    }
    public function validatePost(Post $post)
    {
        return app(Pipeline::class)
            ->send($post)
            ->through([
                IfActual::class,
                CheckForPlagiate::class,
                CheckForBadWords::class,
            ])
            ->thenReturn();
    }

    public function getExternalPost()
    {
        $api = new PostDataCreate();
        return $api->getPostData();
    }

    public function getExternalPost2()
    {
        $api = new ExampleGazzle();

        $api->yourMethod();
        $data = json_decode($api->yourMethod(), true);
        return $data;
    }

    public function checkPrivateTest()
    {
        $this->testPost();
    }

}

