<?php

return [

	/*
	|--------------------------------------------------------------------------
	| Third Party Services
	|--------------------------------------------------------------------------
	|
	| This file is for storing the credentials for third party services such
	| as Stripe, Mailgun, Mandrill, and others. This file provides a sane
	| default location for this type of information, allowing packages
	| to have a conventional place to find your various credentials.
	|
	*/

	'mailgun' => [
		'domain' => env('MAILGUN_DOMAIN','sdhacks.io'),
		'secret' => env('MAILGUN_SECRET',''),
	],

	'mandrill' => [
		'secret' => '',
	],

	'ses' => [
		'key' => '',
		'secret' => '',
		'region' => 'us-east-1',
	],

	'stripe' => [
		'model'  => 'User',
		'secret' => '',
	],

    'github' => [
        'client_id' => env('GITHUB_ID',''),
        'client_secret' => env('GITHUB_SECRET','your-github-app-secret'),
        'redirect' => env('GITHUB_CALLBACK', 'http://sdhacks.app/auth/github/callback'),
    ],

];
