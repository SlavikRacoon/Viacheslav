<?php

namespace App\Traits;

trait Post
{
    public function getPost()
    {
        return $this->post . "Inner trait";
    }
}
