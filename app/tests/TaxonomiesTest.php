<?php

class TaxonomiesTest extends TestCase
{

    public function setUp()
    {
        parent::setUp();
        Session::start();
        Route::enableFilters();
    }

    public function testCreate()
    {
        $user = new User;
        $this->be($user);
        $this->call('GET', 'taxonomies/create');
        $this->assertResponseOk();
    }

}