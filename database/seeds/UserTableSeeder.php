<?php

use App\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->truncate();

        User::create([
            'name' => 'User',
            'email' => 'user@tyloo.fr',
            'password' => '123456',
            'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'Moderator',
            'email' => 'mod@tyloo.fr',
            'password' => '123456',
            'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'Administrator',
            'email' => 'admin@tyloo.fr',
            'password' => '123456',
            'remember_token' => str_random(10),
        ]);
        User::create([
            'name' => 'Banned',
            'email' => 'banned@tyloo.fr',
            'password' => '123456',
            'remember_token' => str_random(10),
        ]);
        factory(App\User::class, 6)->create();
    }
}
