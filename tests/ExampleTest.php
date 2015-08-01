<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Spring;

class ExampleTest extends TestCase
{

    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testFrontpage()
    {
        $this->visit('/')
             ->see('Löydä lähde');
    }

    public function testSearch()
    {
        $this->visit('/')
             ->type('spring name', '#search')
             ->press('HAE')
             ->see('Hakutulokset termille "spring name"')
             ->onPage('/hakutulokset');
    }

    public function testSprings()
    {
        $spring = factory(Spring::class)->create();
        $this->visit('lahteet')
            ->see($spring->title);
    }

}
