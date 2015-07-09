<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\UserRequest;
use App\Jobs\User\DeleteUser;
use App\Jobs\User\SaveUser;
use App\Repositories\UserRepository;

class UsersController extends Controller
{
    /**
     * @var \App\Repositories\UserRepository
     */
    protected $user;

    public function __construct(UserRepository $user)
    {
        $this->user = $user;
    }

    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $users = $this->user->all();

        return view('backend.users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('backend.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param UserRequest $request
     *
     * @return string
     */
    public function store(UserRequest $request)
    {
        $this->dispatch(new SaveUser($request->except(['_token', '_method']), $this->user));

        return redirect()->route('admin.users.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function show($id)
    {
        $user = $this->user->find($id);

        return view('backend.users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return Response
     */
    public function edit($id)
    {
        $user = $this->user->find($id);

        return view('backend.users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UserRequest $request
     * @param  int                           $id
     *
     * @return Response
     */
    public function update(UserRequest $request, $id)
    {
        $this->dispatch(new SaveUser($request->except(['_token', '_method']), $this->user, $id));

        return redirect()->route('admin.users.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
        $this->dispatch(new DeleteUser($this->user, $id));

        return redirect()->route('admin.users.index');
    }
}
