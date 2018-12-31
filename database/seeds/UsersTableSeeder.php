<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'José Baptista',
        	'email' => 'baprivas@gmail.com',
        	'password' => bcrypt('qwerty'),
        ]);
    }
}
