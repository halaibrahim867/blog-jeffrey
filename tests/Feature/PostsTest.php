<?php

namespace Tests\Feature;

use App\Models\Post;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class PostsTest extends TestCase
{
    public function test_home_page_contain_posts(): void
    {
        Post::create([
            'user_id'=>1,
            'category_id'=>6,
            'title'=>'Test Post',
            'slug'=>'test-post',
            'excerpt'=>'excerpt for test post',
            'body'=>'body for test post'
        ]);
        $response = $this->get('/');

        $response->assertStatus(200);

        $response->assertDontSee('No posts yet, Please check back later.');
    }

}
