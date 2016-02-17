<?php

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Model::unguard();

        $this->call('UserTableSeeder');
        $this->call('PostTableSeeder');
        $this->call('WorkTableSeeder');
        $this->call('CustomerTableSeeder');
        $this->call('TagTableSeeder');

        Model::reguard();
    }
}
