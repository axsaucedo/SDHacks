<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUserFields extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('users', function(Blueprint $table)
		{
			// Remove name field
			$table->dropColumn('name');

			// Add new columns
			$table->string('fname')->after('remember_token');
			$table->string('lname')->after('remember_token');
            $table->string('major')->nullable()->after('remember_token');
            $table->string('phone')->nullable()->after('remember_token');
            $table->string('school')->nullable()->after('remember_token');
            $table->string('gender')->nullable()->after('remember_token');
            $table->date('dob')->nullable()->after('remember_token');
            $table->string('github')->nullable()->after('remember_token');
            $table->string('linkedin')->nullable()->after('remember_token');
            $table->string('website')->nullable()->after('remember_token');
            $table->string('allergies')->nullable()->after('remember_token');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('users', function(Blueprint $table)
		{
			// Add name column back
			$table->string('name')->after('id');

			// Remove new columns
			$table->dropColumn([
                    'fname',
					'lname',
					'phone'
				]);
		});
	}

}
