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

    public function testUnauthorizedUserCannotAccessAdminSprings()
    {
        $response = $this->call('GET','/admin/springs');
        $this->assertEquals(404, $response->status());
    }

    public function testUnLoggedInUserCannotSeeAdminHome()
    {
        $this->call('GET','/admin');
        $this->assertRedirectedTo('/admin/login');
    }

    public function testUnLoggedInUserCannotEditASpring()
    {
        $spring = factory(Spring::class)->create();
        $response = $this->call('GET','/admin/springs/' . $spring->id . '/edit');
        $this->assertEquals(404, $response->status());
    }

    public function testRegistrationIsDisabledAndRedirectsToFrontPage()
    {
        $response = $this->call('GET','/register');
        $this->assertEquals(404, $response->status());
        //$this->call('GET','/register');
        //$this->assertRedirectedToAction('PageController@getFrontPage', $parameters = [], $with = []);

        //$tagLine = 'Koska kaikilla on oikeus puhtaaseen veteen';

        //$this->visit('/register')
          //  ->see($tagLine);

    }

    public function testSpringsAreIndexedForLoggedInUser()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user)
            ->visit('/admin/spring')
            ->see('<h1>
	    <span class="text-capitalize">springs</span>
	    <small>All  <span class="text-lowercase">springs</span> in the database.</small>
	  </h1>');
    }

    public function loggedInUserSeesAdminHome()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user)
            ->visit('/admin/')
            ->see($user->name);
    }

    public function test_it_creates_a_spring()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/admin/spring/create')
            ->type('Joku nimi', 'title')
            ->type('kakkosnimi', 'alias')
            ->select('juomakelpoista', 'status')
            ->type('10-11-1981', 'tested_at')
            ->type('sisältöä', 'description')
            ->type('excerptti tähän', 'short_description')
            ->type('60.226560', 'latitude')
            ->type('25.123636', 'longitude')
            ->check('visibility')
            ->press('Add')
            ->see('Joku nimi');
    }

    public function testSpringEdit()
    {
        $user = factory(App\User::class)->create();

        $spring = factory(Spring::class)->create();
        $this->actingAs($user)
            ->visit('/admin/spring/' . $spring->id . '/edit')
            ->see('Edit');
    }

  /*  public function test_it_creates_a_page()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/admin/page/create')
            ->type('Page title test', 'title')
            ->type('page-title-test', 'slug')
            ->type('this is the meta description', 'meta_description')
            ->type('lorem ipsum jee jee jee', 'content')
            ->select('services', 'template')
            ->press('Add')
            ->see('Page title test');

    }*/

   /* public function test_a_page_can_be_edited()
    {
        $user = factory(App\User::class)->create();
        $page = factory(App\Page::class)->create();

        $this->actingAs($user)
            ->visit('/admin/pages/' . $page->id . '/edit')
            ->see('Edit');
    }*/

    public function userLogsOutAndIsredirectedToFrontpage()
    {
        $user = factory(App\User::class)->create();
        $tagLine = 'Koska kaikilla on oikeus puhtaaseen veteen';

        $this->actingAs($user)
            ->visit('/admin')
            ->press('Logout')
            ->see($tagLine);
    }
}