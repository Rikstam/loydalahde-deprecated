<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class SearchTest extends BrowserKitTestCase
{
    /**
     * A basic test for spring search result.
     *
     * @return void
     */

    /** @test */
    public function SearchResultPageIsShown()
    {
        $this->visit('/')
           // ->type('search term', '#search_value')
            ->press('Hae')
            ->see('Hakutulokset:')
            ->seePageIs('/hakutulokset');
    }
}
