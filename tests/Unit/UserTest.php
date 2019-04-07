<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\User;

class UserTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testExample()
    {
        $user = User::InRandomOrder()->first();
        $this->assertInternalType('int', $user->id);
        $this->assertInstanceOf('App\User', $user);
    }

    public function testExpectUserActualUser()
    {
        $user = User::find(1);
        $this->expectOutputString($user);
        print $user;

    }
}
