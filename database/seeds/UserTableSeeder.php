<?php

/**
* 
*/
use Illuminate\Database\Seeder;
class UserTableSeeder extends Seeder
{
	
	public function run()
	{
		\DB::table('users')->insert(array(
			'name' => 'christian',
			'email'=> 'chris.ing.sis@gmail.com',
			'password'=>\Hash::make('secret')	

			));
	}
}