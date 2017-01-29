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
        $this->call('GET','/admin/springs');
        $this->assertRedirectedTo('/login');
    }

    public function testUnLoggedInUserCannotSeeAdminHome()
    {
        $this->call('GET','/admin');
        $this->assertRedirectedTo('/login');
    }

    public function testUnLoggedInUserCannotEditASpring()
    {
        $spring = factory(Spring::class)->create();
        $this->call('GET','/admin/springs/' . $spring->id . '/edit');
        $this->assertRedirectedTo('/login');
    }

    public function testRegistrationIsDisabled()
    {
        $response = $this->call('GET','/register');
        $this->assertEquals(404, $response->status());
    }

    public function testSpringsAreIndexedForLoggedInUser()
    {
        $user = factory(App\User::class)->create();
        $this->actingAs($user)
            ->visit('/admin/springs')
            ->see('Kaikki lähteet');
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
            ->visit('/admin/springs/create')
            ->type('Joku nimi', 'title')
            ->type('kakkosnimi', 'alias')
            ->select('juomakelpoista', 'status')
            ->type('10-11-1981', 'tested_at')
            ->type('sisältöä', 'description')
            ->type('excerptti tähän', 'short_description')
            ->type('60.226560', 'latitude')
            ->type('25.123636', 'longitude')
            ->select('true', 'visibility')
            ->press('Lisää lähde')
            ->see('Joku nimi');
    }

    public function testSpringEdit()
    {
        $user = factory(App\User::class)->create();

        $spring = factory(Spring::class)->create();
        $this->actingAs($user)
            ->visit('/admin/springs/' . $spring->id . '/edit')
            ->see($spring->title);
    }

    public function test_it_creates_a_page()
    {
        $user = factory(App\User::class)->create();

        $this->actingAs($user)
            ->visit('/admin/pages/create')
            ->type('Page title test', 'title')
            ->type('page-title-test', 'slug')
            ->type('this is the meta description', 'meta_description')
            ->type('lorem ipsum jee jee jee', 'content')
            ->press('Lisää sivu')
            ->see('Page title test');

    }

    public function test_a_page_can_be_edited()
    {
        $user = factory(App\User::class)->create();
        $page = factory(App\Page::class)->create();

        $this->actingAs($user)
            ->visit('/admin/pages/' . $page->id . '/edit')
            ->see($page->title);
    }
}