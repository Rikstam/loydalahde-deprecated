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
    public function testSpringsAreIndexed()
    {
        $this->visit('/admin/springs')
        ->see('Kaikki lähteet');
    }

    public function testSpringEdit()
    {
        $spring = factory(Spring::class)->create();
        $this->visit('/admin/springs/' . $spring->id . '/edit')
            ->see($spring->title);
    }

}