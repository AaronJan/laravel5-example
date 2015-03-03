<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('user', function(Blueprint $table)
        {
            $table->increments('id');
            $table->string('name', 20);
            $table->string('password', 40);
            $table->string('salt', 40);
            $table->integer('total_message');
            $table->dateTime('last_logged_at');
            $table->dateTime('created_at');
        });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('user');
	}

}
