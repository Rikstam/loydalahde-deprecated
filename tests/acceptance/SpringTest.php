<?php

use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

use App\Spring;

class SpringTest extends BrowserKitTestCase
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

   // public function test_it_displays_all_springs()
    //{
      //  $spring = factory(Spring::class)->create();
        //$this->visit('lahteet')
          //  ->see($spring->title);

    //}

    public function test_it_displays_a_single_spring()
    {
        $spring = factory(Spring::class)->create();
        $this->visit('http://loydalahde.app/lahteet/' . $spring->slug)
            ->see($spring->title);
    }


}
