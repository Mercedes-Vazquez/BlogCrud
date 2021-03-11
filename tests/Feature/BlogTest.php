<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Tests\TestCase;


class BlogTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testReaderCanSeeListedPost()
    {
        $postList = Post::factory(2)->create();
        $response = $this->get ('/blog');
        $response->assertStatus(200);
    }
}
