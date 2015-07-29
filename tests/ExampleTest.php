<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->visit('/')
             ->see('Löydä lähde');
    }

    public function testSearch()
    {
        $this->visit('/')
             ->type('spring name', '#search')
             ->press('Hae')
             ->see('Hakutulokset termille "spring name"')
             ->onPage('/hakutulokset');
    }

}
