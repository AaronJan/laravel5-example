<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Model::unguard();

        // $faker = Faker\Factory::create();

        $this->command->info('User table seeded!');



        $this->command->info('Message table seeded!');



		// $this->call('UserTableSeeder');
	}

}
