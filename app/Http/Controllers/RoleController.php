<?php

namespace App\Http\Controllers;

use App\Models\Role;
use App\Http\Requests\RoleRequest;
use App\Http\Services\RoleServices;

class RoleController extends Controller
{
    public $roleSevices;
     

    public function __construct(RoleServices $roleSevices)
    {
        $this->roleSevices = $roleSevices;
    }

    public function view()
    {
        $roles = $this->roleSevices->handleGetRole();
        return view('role.view-roles', compact('roles'));
    }

    public function add()
    {
        return view('role.add-role');
    }

    public function store(RoleRequest $request)
    {
        $this->roleSevices->handleStoreRole($request);
        return redirect()->route('roles.view');
    }

    public function edit($id)
    {
        $role = $this->roleSevices->handleFindRole($id);
        return view('role.edit-role', compact('role'));
    }

    public function update(RoleRequest $request, $id)
    {
        $this->roleSevices->handleUpdateRole($request, $id);
        return redirect()->route('roles.view');
    }

    public function delete($id)
    {
        $this->roleSevices->handleDeleteRole($id);
        return redirect()->route('roles.view');
    }
}
