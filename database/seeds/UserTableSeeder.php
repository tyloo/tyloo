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
        $tyloo = [
            'name'           => 'Julien Bonvarlet',
            'email'          => 'jbonva@gmail.com',
            'password'       => '123456',
            'avatar'         => '//www.gravatar.com/avatar/'.md5('jbonva@gmail.com'),
        ];
        factory(App\User::class)->create($tyloo);
        factory(App\User::class, 9)->create();
    }
}
