<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTeamsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('teams', function(Blueprint $table)
        {
            $table->increments('id');
            $table->tinyInteger('event_id')->default(1);
            $table->string('code')->unique();
            $table->string('project')->nullable();
            $table->timestamps();
        });

        Schema::table('users', function(Blueprint $table)
        {
            $table->integer('team_id')->unsigned()->after('remember_token')->nullable();
            $table->foreign('team_id')->references('id')->on('teams');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
        Schema::table('users', function(Blueprint $table) {
            $table->dropForeign('users_team_id_foreign');
            $table->dropColumn('team_id');
        });

		Schema::drop('teams');
	}

}
