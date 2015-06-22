<?php

use Bican\Roles\Models\Role;
use Illuminate\Database\Seeder;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('roles')->truncate();
        DB::table('role_user')->truncate();

        Role::create([
            'name'        => 'Admin',
            'slug'        => 'admin',
            'description' => 'Website Administrator (access everything)',
        ]);

        Role::create([
            'name'        => 'Moderator',
            'slug'        => 'moderator',
            'description' => 'Website Moderator (can only add content, but cannot manage the Website)'
        ]);
    }
}
