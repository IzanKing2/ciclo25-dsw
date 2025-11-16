<?php

namespace App\Services\Post;

use App\Models\Post;
use Request;

class PostService
{
    public function create(array $data): Post
    {
        return Post::create($data);
    }
}