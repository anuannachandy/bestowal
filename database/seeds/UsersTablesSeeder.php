<?php

use Illuminate\Database\Seeder;
use App\User;
class UsersTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'				=>	'admin',
			'email'				=>	'admin@gmail.com',
			'password' 			=> 	Hash::make('admin@1'),
			'remember_token'	=>	Str::random(10),
        ]);
    }
}
