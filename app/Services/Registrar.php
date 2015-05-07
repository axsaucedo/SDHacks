<?php namespace App\Services;

use App\User;
use Validator;
use Illuminate\Contracts\Auth\Registrar as RegistrarContract;

class Registrar implements RegistrarContract {

	/**
	 * Get a validator for an incoming registration request.
	 *
	 * @param  array  $data
	 * @return \Illuminate\Contracts\Validation\Validator
	 */
	public function validator(array $data)
	{
		return Validator::make($data, [
			'fname' => 'required|max:255',
			'lname' => 'required|max:255',
			'email' => 'required|email|max:255|unique:users',
			'phone' => 'regex:^(\+\d{1,2}\s)?\(?\d{3}\)?[\s.-]\d{3}[\s.-]\d{4}$',
			'school' => 'required|max:255',
			'github' => 'url|max:255',
			'bussing' => 'required|boolean',
			'password' => 'required|confirmed|min:6',
		]);
	}

	/**
	 * Create a new user instance after a valid registration.
	 *
	 * @param  array  $data
	 * @return User
	 */
	public function create(array $data)
	{
		return User::create([
			'fname' => $data['fname'],
			'lname' => $data['lname'],
			'phone' => $data['phone'],
			'email' => $data['email'],
			'school' => $data['school'],
			'github' => $data['github'],
			'bussing' => $data['bussing'],
			'password' => bcrypt($data['password']),
		]);
	}

}
