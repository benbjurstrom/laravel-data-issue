<?php

namespace Tests\Feature;

use App\Data\UserData;
use App\Models\User;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    public function testPaginatePasses()
    {
        $this->seed();
        $users = User::orderBy('created_at', 'DESC')->paginate(5);
        $userData = UserData::collection($users);

        // No error
        $array = $userData->toArray();
        $this->assertIsArray($array);
    }

    public function testCursorPaginateFails()
    {
        $this->seed();
        $users = User::orderBy('created_at', 'DESC');
        $userData = UserData::collection($users->cursorPaginate(5));

        // ErrorException : Undefined property: App\Data\UserData::$created_at
        $array = $userData->toArray();
        $this->assertIsArray($array);
    }
}
