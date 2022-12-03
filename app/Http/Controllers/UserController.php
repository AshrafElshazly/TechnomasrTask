<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Http\Services\{RoleServices, UserServices};

class UserController extends Controller
{
    public $userSevices;
    public $roleSevices;
     
    
    public function __construct(UserServices $userSevices, RoleServices $roleSevices)
    {
        $this->userSevices = $userSevices;
        $this->roleSevices = $roleSevices;
    }
    
    public function view()
    {
        $users = $this->userSevices->handleGetUser();
        return view('user.view-users',compact('users'));
    }

    public function add()
    {
        $roles = $this->roleSevices->handleGetRole();
        return view('user.add-user',compact('roles'));
    }

    public function store(UserRequest $request)
    {
        $this->userSevices->handleStoreUser($request);
        return redirect()->route('users.view');
    }

    public function edit($id)
    {
        $user  = $this->userSevices->handleFindUser($id);
        $roles = $this->roleSevices->handleGetRole();
        return view('user.edit-user', compact('user','roles'));
    }

    public function editProfile()
    {
        $roles = $this->roleSevices->handleGetRole();
        return view('user.edit-profile', compact('roles'));
    }

    public function update($id, UserRequest $request)
    {
        $this->userSevices->handleUpdateUser($request, $id);
        return redirect()->route('users.view');
    }

    public function delete($id)
    {
        $this->userSevices->handleDeleteUser($id);
        return redirect()->route('users.view');
    }

}
