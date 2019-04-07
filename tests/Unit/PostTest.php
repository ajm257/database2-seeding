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

    public function testPostCount()
    {
        $posts = Post::All();
        $postCount = $posts->count();
        $this->assertCount($postCount>=500, ['foo']);
    }

}
