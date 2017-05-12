<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Page;

class PageTest extends BrowserKitTestCase
{

    use DatabaseTransactions;

    /**
     * A basic functional test example.
     *
     * @return void
     */
    public function testFaqPage()
    {
        $this->visit('usein-kysytyt-kysymykset')
            ->see('Usein kysytyt kysymykset');
    }

    // public function test_it_displays_all_springs()
    //{
    //  $spring = factory(Spring::class)->create();
    //$this->visit('lahteet')
    //  ->see($spring->title);

    //}
/*
    public function test_it_displays_a_single_spring()
    {
        $spring = factory(Spring::class)->create();
        $this->visit('lahteet/' . $spring->id)
            ->see($spring->title);
    }
*/

}
