<?php

use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('users', function($t)
		{

			$t->increments('id');
			$t->string('email',64);
			$t->string('password');
			$t->string('first_name');
			$t->string('last_name');
			$t->boolean('active')->default(1);
			$t->boolean('banned')->default(0);
			$t->timestamps();
			$t->softDeletes();

			$t->unique('email');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('users');
	}

}