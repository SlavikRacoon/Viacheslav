<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ApiRequestTest extends TestCase
{
    /**
     * A basic feature test example.
     */
    public function test_product_create_api_request(): void
    {
        $response = $this->postJson('/api/product', [
            'name' => 'Telephone',
            'description' => 'Coll!',
            'price' => '100'
            ]);

        $response
            ->assertStatus(201)
            ->assertJson([
                'name' => 'Telephone',
                'description' => 'Coll!',
                'price' => '100'
            ]);
    }
}
