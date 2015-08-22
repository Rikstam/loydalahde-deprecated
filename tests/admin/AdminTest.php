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

    public function test_it_creates_a_spring()
    {
        $this->visit('/admin/springs/create')
            ->type('Joku nimi', 'title')
            ->type('kakkosnimi', 'alias')
            ->select('juomakelpoista','status')
            ->type('10-11-1981', 'tested_at')
            ->type('sisältöä', 'description')
            ->type('excerptti tähän','short_description')
            ->type('60.226560', 'latitude')
            ->type('25.123636', 'longitude')
            ->check('visibility')
            ->press('Lisää lähde')
            ->see('Joku nimi')
            ->onPage('admin/springs');
    }

    public function testSpringEdit()
    {
        $spring = factory(Spring::class)->create();
        $this->visit('/admin/springs/' . $spring->id . '/edit')
            ->see($spring->title);
    }

}