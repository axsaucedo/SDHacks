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
			$table->string('phone')->nullable();
			$table->string('school');
			$table->string('github')->nullable();
			$table->boolean('bussing')->default(false);
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
			$table->string('name');

			// Remove new columns
			$table->dropColumn([
					'lname',
					'phone',
					'school',
					'github',
					'bussing'
				]);
		});
	}

}
