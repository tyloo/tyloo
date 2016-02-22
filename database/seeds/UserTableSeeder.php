<?php

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
        factory(App\User::class)->create([
            'name'           => 'Julien Bonvarlet',
            'email'          => 'jbonva@gmail.com',
            'password'       => '123456',
        ]);
    }
}
