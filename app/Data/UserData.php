<?php

namespace App\Data;

use App\Models\User;
use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        public string $id,
        public string $name,
        public string $createdAt,
    ) {
    }

    public static function fromModel(User $user): UserData
    {
        return new self(
            id: $user->id,
            name: $user->name,
            createdAt: $user->created_at,
        );
    }
}
