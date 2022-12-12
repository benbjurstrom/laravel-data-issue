<?php

namespace App\Data;

use App\Models\Post;
use Spatie\LaravelData\Data;

class PostData extends Data
{
    public function __construct(
        public string $title,
        public string $description,
    ) {
    }

    public static function fromModel(Post $post): PostData
    {
        return new self(
            title: $post->title,
            description: $post->description
        );
    }
}

