<?php

use App\User;
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

        Role::create([
            'name'        => 'Anonymous',
            'slug'        => 'anonymous',
            'description' => 'Anonymous User (not logged in)',
            'level'       => 0,
        ]);

        Role::create([
            'name'        => 'User',
            'slug'        => 'user',
            'description' => 'Website User (can do nothing for now)',
            'level'       => 1,
        ]);

        Role::create([
            'name'        => 'Moderator',
            'slug'        => 'moderator',
            'description' => 'Website Moderator (can only add content, but cannot manage the Website)',
            'level'       => 2,
        ]);

        Role::create([
            'name'        => 'Admin',
            'slug'        => 'admin',
            'description' => 'Website Administrator (access everything)',
            'level'       => 3,
        ]);

        Role::create([
            'name'        => 'Banned',
            'slug'        => 'banned',
            'description' => 'Banned User (cannot access functionalities)',
            'level'       => 9,
        ]);

        User::find(1)->attachRole(1);
        User::find(2)->attachRole(2);
        User::find(3)->attachRole(3);
        User::find(4)->attachRole(4);
        $users = User::where('id', '>', 4)->get();
        foreach ($users as $user) {
            $user->attachRole(1);
        }
    }
}
