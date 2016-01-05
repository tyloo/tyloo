<?php

namespace App\Tests\Http\Controllers\Backend;

use App\Tests\AbstractTestCase;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersControllerTest extends AbstractTestCase
{
    /** @test */
    public function it_can_fetch_users_list()
    {
        $this->createAndBe();

        $this->visit('/admin/users');
    }

    /** @test */
    public function it_can_create_an_user()
    {
        $this->createAndBe();

        $this->visit('/admin/users/create');
    }

    /** @test */
    public function it_can_store_an_user()
    {
        $this->withoutMiddleware();
        $this->createAndBe();

        $data = [
            'name'                  => 'User',
            'email'                 => 'user@tyloo.fr',
            'password'              => '123456',
            'password_confirmation' => '123456',
        ];

        $this->post('/admin/users', $data);
        $this->seeInDatabase('users', ['name' => 'User']);
        $this->assertRedirectedToRoute('admin.users.index');
    }

    /** @test */
    public function it_has_a_page_showing_an_user_profile()
    {
        $this->createAndBe();

        $user = factory(User::class)->create();
        $this->visit('/admin/users/'.$user->id);
        $this->assertViewHas('user');
    }

    /** @test */
    public function it_can_edit_an_user()
    {
        $this->createAndBe();

        $user = factory(User::class)->create();
        $this->visit('/admin/users/'.$user->id.'/edit');
        $this->assertViewHas('user');
    }

    /** @test */
    public function it_can_update_an_user()
    {
        $this->withoutMiddleware();
        $this->createAndBe();

        $data = ['name' => 'New Name'];
        $user = factory(User::class)->create();

        $this->put('/admin/users/'.$user->id, $data);
        $this->seeInDatabase('users', $data);
        $this->assertRedirectedToRoute('admin.users.index');
    }

    /** @test */
    public function it_can_delete_an_user()
    {
        $this->createAndBe();

        $data = [
            'name'     => 'User',
            'email'    => 'user@tyloo.fr',
            'password' => '123456',
        ];
        $user = factory(User::class)->create($data);

        $this->get('/admin/users/delete/'.$user->id);

        $data['password'] = Hash::make($data['password']);
        $this->notSeeInDatabase('users', $data);
        $this->assertRedirectedToRoute('admin.users.index');
    }
}
