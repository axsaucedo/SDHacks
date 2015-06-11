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
			$table->string('fname');
			$table->string('lname');
            $table->string('major')->nullable();
            $table->string('phone')->nullable();
            $table->string('school')->nullable();
            $table->string('gender')->nullable();
            $table->date('dob')->nullable();
            $table->string('github')->nullable();
            $table->string('linkedin')->nullable();
            $table->string('website')->nullable();
            $table->string('allergies')->nullable();
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
