<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
        	'name' => "Admin",
        	'email' => "admin@gmail.com",
        	'password' =>Hash::make("passadmin"),
        ]);

    }
}
