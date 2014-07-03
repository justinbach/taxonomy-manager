<?php

class SessionsTest extends TestCase
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

        $this->action('POST', 'SessionsController@store', null, $credentials);
        $this->assertEquals(Auth::check(), true);
    }

    public function testInvalidUserShouldNotLogIn()
    {
        $credentials = [
            'email'     => 'baduser@fake.com',
            'password'  => 'nogood'
        ];

        $this->action('POST', 'SessionsController@store', null, $credentials, [], ['HTTP_REFERER' => 'http://www.npr.org']);
        $this->assertEquals(Auth::check(), false);
    }
}