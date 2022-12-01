<?php

namespace App\Data;

use App\Models\User;
use Spatie\LaravelData\Attributes\MapInputName;
use Spatie\LaravelData\Data;
use Spatie\LaravelData\Mappers\SnakeCaseMapper;

#[MapInputName(SnakeCaseMapper::class)]
class UserData extends Data
{
    public function __construct(
        public string $id,
        public string $name,
        #[MapInputName('created_at')]
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
