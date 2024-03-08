<?php

namespace App\Traits;

trait NewsPost
{
    use Post;
    public string $news;
    public string $post = "10";

//    public function getPost()
//    {
//        return $this->post . "news";
//    }
    public function addNewNews(string $news_info)
    {
        return "News: " . $news_info;
    }
    private function testPost()
    {
        var_dump("test");
    }
}
