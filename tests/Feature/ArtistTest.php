<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ArtistTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_the_artist_api_returns_a_successful_response()
    {
        $response = $this->get('/api/artist');

        $response->assertStatus(200);
    }
}
