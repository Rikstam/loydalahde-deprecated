<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Spring;

class AdminTest extends TestCase
{

    use DatabaseTransactions;

    /**
    * A basic functional test example.
    *
    * @return void
    */
    public function testFrontpage()
    {
        $this->visit('/admin/springs')
        ->see('Kaikki lähteet');
    }

}