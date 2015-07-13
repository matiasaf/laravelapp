<?php

use Illuminate\Database\Seeder;

	class UserTableSeeder extends Seeder {

		public function run(){

			\DB::table('users')->insert( array(

				'username' => 'Matiasaf',
				'email' => 'fernandez.amatias@gmail.com',
				'password' => \Hash::make('123123'),


				));

			\DB::table('users')->insert( array(

				'username' => 'roberto',
				'email' => 'roberto@gmail.com',
				'password' => \Hash::make('123123'),


				));
		}


	}
