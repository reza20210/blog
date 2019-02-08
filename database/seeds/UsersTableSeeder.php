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
        $user = \App\User::create([
            'name' => 'reza',
            'email' => 'rezaabasi20210@yahoo.com',
            'password' => bcrypt('secret'),
            'admin' => 1
        ]);

        \App\Profile::create([
            'user_id' => $user->id,
            'avatar' => 'uploads/avatars/1.png',
            'about' => 'text',
            'facebook' => 'https://www.facebook.com',
            'youtube' => 'https://www.youtube.com',
        ]);
    }
}
