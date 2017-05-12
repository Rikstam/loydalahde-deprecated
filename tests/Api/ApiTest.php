<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Spring;

class ApiTest extends BrowserKitTestCase
{

    public function testApiSpringsIndexIsOperational()
    {
        $this->get('/api/springs')
            ->seeStatusCode(200);
    }

    public function testSpringsAreIndexedInApi()
    {
        $this->get('/api/springs')
            ->seeJson();
    }



}
