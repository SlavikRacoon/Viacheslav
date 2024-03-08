<?php

namespace App\Traits;

trait NaturePost
{
    public string $nature;
    public string $post = "10";

    public function getPost()
    {
        return $this->post . "nature";
    }
    public function addNewNature(string $nature_info)
    {
        return "Nature: " . $nature_info;
    }
}
