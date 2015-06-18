<?php

use Illuminate\Foundation\Testing\DatabaseTransactions;
use App\Http\Controllers\Auth\AuthController;

class AuthControllerTest extends TestCase {

    use DatabaseTransactions;

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


    /**
     * Controller Tests
     */

    /**
     * Registration
     */

    /**
     * Test register link from login page
     */
    public function testRegisterLinkFromLogin()
    {
        $this->visit(action('Auth\AuthController@getLogin'));
        $this->click('Register')
            ->see('Register');
    }

    /**
     * Test user registration form
     */
    public function testRegisterUserForm()
    {
        $this->visit(action('Auth\AuthController@getRegister'));
        $this->type('test@example.org', 'email')
            ->type('test1234', 'password')
            ->type('test1234', 'password_confirmation')
            ->press('Register');

        // Check if success page shows
        $this->see('Please confirm your email');

        // Check if user has been persisted in database
        $this->seeInDatabase('users', ['email' => 'test@example.org']);
    }

    /**
     * Test user registration form without email
     */
    public function testRegisterUserFormWithoutEmail()
    {
        $this->visit(action('Auth\AuthController@getRegister'));
        $this->type('test1234', 'password')
            ->type('test1234', 'password_confirmation')
            ->press('Register');

        // Check if error message shows
        $this->see('The email field is required.');
    }

    /**
     * Test user registration form with duplicate email
     */
    public function testRegisterUserFormDuplicateEmail()
    {
        // Create user with email
        $this->visit(action('Auth\AuthController@getRegister'));
        $this->type('test@example.org', 'email')
            ->type('test1234', 'password')
            ->type('test1234', 'password_confirmation')
            ->press('Register');

        // Create user again
        $this->visit(action('Auth\AuthController@getRegister'));
        $this->type('test@example.org', 'email')
            ->type('test1234', 'password')
            ->type('test1234', 'password_confirmation')
            ->press('Register');

        // Check if error message shows
        $this->see('Your email has already been taken!');
    }

    /**
     * Test user registration form without password
     */
    public function testRegisterUserFormWithoutPassword()
    {
        $this->visit(action('Auth\AuthController@getRegister'));
        $this->type('test@example.org', 'email')
            ->press('Register');

        // Check if error message shows
        $this->see('The password field is required.');
    }

    /**
     * Test user registration form without password
     */
    public function testRegisterUserFormUnconfirmedPassword()
    {
        $this->visit(action('Auth\AuthController@getRegister'));
        $this->type('test@example.org', 'email')
            ->type('test1234', 'password')
            ->press('Register');

        // Check if error message shows
        $this->see('The password must be confirmed');


        $this->visit(action('Auth\AuthController@getRegister'));
        $this->type('test@example.org', 'email')
            ->type('test1234', 'password')
            ->type('test123', 'password_confirmation')
            ->press('Register');

        // Check if error message shows
        $this->see('The password must be confirmed');
    }

}
