<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CommandTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_command_make_user(): void
    {
        $this->artisan('user:make')
            ->assertSuccessful();
    }
}
