<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        if (app()->environment() == 'testing') {
            DB::statement('PRAGMA foreign_keys = OFF');
        }
        else {
            DB::statement('SET FOREIGN_KEY_CHECKS = 0');
        }

        Model::unguard();

        $this->call('UserTableSeeder');
        $this->call('RoleTableSeeder');
        $this->call('WorkTableSeeder');
        $this->call('PostTableSeeder');

        Model::reguard();

        if (app()->environment() == 'testing') {
            DB::statement('PRAGMA foreign_keys = ON');
        }
        else {
            DB::statement('SET FOREIGN_KEY_CHECKS = 1');
        }
    }
}
