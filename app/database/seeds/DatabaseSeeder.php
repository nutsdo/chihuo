<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('UserTableSeeder');
	}

}

class UserTableSeeder extends Seeder{
	public function run()
	{
		User::create(array('username' => 'admin','password'=>'$2y$10$LMh1fh9ZbOrTdSyyGZ/0jublZ3GrUP92twFTECalPkVCAyb3aGRU6'));
	}
}