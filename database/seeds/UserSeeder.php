<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name' => 'Luigui',
        	'lastname' => 'Alvarez Ramirez',
        	'email' =>	'alvarezramirez916@gmail.com',
        	'password' => bcrypt('28012013'),
        ]);
    }
}
