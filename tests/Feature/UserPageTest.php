<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserPageTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_user_page_status(): void
    {
        $a = 1;
        $this->assertEquals(1, $a);


        $response = $this->get('/api/user/1/');
        $response->assertStatus(200);

        $response->assertJsonPath('name', 'Test');
        $response->assertJsonPath('email', 'test@test.com');

    }
}


