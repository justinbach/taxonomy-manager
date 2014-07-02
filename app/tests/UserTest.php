<?php

class UserTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        Session::start();
        Route::enableFilters();
    }

    public function testValidUserShouldLogIn()
    {
        $this->seed();

        // from the seed DB
        $credentials = [
            'email'     => 'jbachorik@npr.org',
            'password'  => 'password'
        ];

        $this->action('POST', 'UserController@doLogin', null, $credentials);
        $this->assertEquals(Auth::check(), true);
    }

    public function testInvalidUserShouldNotLogIn()
    {
        $credentials = [
            'email'     => 'baduser@fake.com',
            'password'  => 'nogood'
        ];

        $this->action('POST', 'UserController@doLogin', null, $credentials);
        $this->assertEquals(Auth::check(), false);
    }
}