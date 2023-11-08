<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostsTest extends TestCase
{
    public function test_home_page_contain_posts(): void
    {
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertDontSee('No posts yet, Please check back later.');
    }

}
