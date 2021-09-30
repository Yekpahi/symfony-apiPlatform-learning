<?php
namespace App\Controller;
use App\Entity\Post;

class PosPublishController 
{
    public function __invoke(Post $data): Post
    {
        $data -> setOnline(true);
        return $data;
    }
}



