<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class PublicApiTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */

    public function testApiSpringsIndexIsOperational()
    {
        $response = $this->get('/api/springs');
        $response->assertStatus(200);
    }


    public function testCitiesAreIndexedInApi()
    {
        $response = $this->get('/api/cities/Tampere');
        $response->assertStatus(200);
    }
}
