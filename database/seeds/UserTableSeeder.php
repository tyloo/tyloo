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
            'name' => 'Julien Bonvarlet',
            'email' => 'jbonva@gmail.com',
            'password' => '123456',
            'remember_token' => str_random(10),
        ]);
        factory(App\User::class, 9)->create();
    }
}
