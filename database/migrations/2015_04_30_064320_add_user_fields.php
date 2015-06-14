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
			$table->string('lname')->after('fname');
            $table->string('major')->nullable()->after('lname');
            $table->string('phone')->nullable()->after('major');
            $table->string('school')->nullable()->after('phone');
            $table->string('gender')->nullable()->after('school');
            $table->date('dob')->nullable()->after('gender');
            $table->string('github')->nullable()->after('dob');
            $table->string('linkedin')->nullable()->after('github');
            $table->string('website')->nullable()->after('linkedin');
            $table->string('allergies')->nullable()->after('website');
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
