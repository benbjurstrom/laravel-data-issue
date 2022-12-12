<?php

namespace App\Data;

use App\Models\User;
use Spatie\LaravelData\Data;

class UserData extends Data
{
    public function __construct(
        public string $name,
        public string $email,
    ) {
    }

    public static function fromModel(User $user): UserData
    {
        return new self(
            name: $user->name,
            email: $user->email,
        );
    }
}
