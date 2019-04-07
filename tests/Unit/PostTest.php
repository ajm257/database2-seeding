<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use App\Post;

class PostTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function testPost()
    {
        $post = Post::InRandomOrder()->first();
        $this->assertInternalType('string', $post->title);
    }

    public function testUserCount()
    {
        $posts = Post::All();
        $postcount = $posts->count();
        $this->assertCount($postcount>=500, ['foo']);
    }
}
