<?php

use App\Http\Controllers\Auth\AuthController;

class AuthControllerTest extends TestCase {

    /**
     * Middleware
     */

    /** Registration */

    /**
     * Test if page redirects if authenticated
     */
    public function testRegistrationPageIfAuthenticated()
    {
        $user = factory('App\User')->create();

        $this->actingAs($user)
            ->action('GET', 'Auth\AuthController@getRegister');

        // Check to see if does NOT show registration page
        $this->see('Register', true);
    }

    /**
     * Test if registration page if a guest
     */
    public function testRegistrationPageIfGuest()
    {
        $this->action('GET', 'Auth\AuthController@getRegister');
        $this->see('Register');
    }

    /** Login */

    /**
     * Test if page redirects if authenticated
     */
    public function testLoginPageIfAuthenticated()
    {
        $user = factory('App\User')->create();

        $this->actingAs($user)
            ->action('GET', 'Auth\AuthController@getLogin');

        // Check to see if does NOT show login page
        $this->see('Login', true);
    }

    /**
     * Test if login page shows if guest
     */
    public function testLoginPageIfGuest()
    {
        $this->action('GET', 'Auth\AuthController@getLogin');

        $this->see('Login');
    }

}
