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

    public function test_it_displays_all_springs()
    {
        $spring = factory(Spring::class)->create();
        $this->visit('lahteet')
            ->see($spring->title);

    }

    public function test_it_displays_a_single_spring()
    {
        $spring = factory(Spring::class)->create();
        $this->visit('lahteet/' . $spring->id)
             ->see($spring->title);
    }

    public function test_it_creates_a_spring()
    {
        $this->visit('admin/springs/create')
             ->type('Joku nimi', 'title')
             ->type('kakkosnimi', 'alias')
             ->select('juomakelpoista','status')
             ->type('10-11-1981', 'tested_at')
             ->type('sisältöä', 'description')
             ->type('excerptti tähän','short_description')
             ->type('60.226560', 'latitude')
             ->type('25.123636', 'longitude')
             ->check('visibility')
             ->press('Julkaise')
             ->see('Joku nimi')
             ->onPage('lahteet');
    }

}
