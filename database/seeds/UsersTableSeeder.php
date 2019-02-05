<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'reza',
            'email' => 'rezaabasi20210@yahoo.com',
            'password' => bcrypt('secret')
        ]);
    }
}
