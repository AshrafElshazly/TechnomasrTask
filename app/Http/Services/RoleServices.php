<?php 

namespace App\Http\Services;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleServices
{
    public function handleGetRole()
    {
        return Role::get();
    }

    public function handleFindRole($id)
    {
        return Role::findOrFail($id);
    }

    public function handleDeleteRole($id) : void
    {
        $this->handleFindRole($id)->delete();
    }

    public function handleStoreRole(Request $request) : void
    {
        Role::create([
            'name' => $request->name,
            'permissions' => $request->permissions
        ]);
    }

    public function handleUpdateRole(Request $request, $id) : void
    {
        $role = $this->handleFindRole($id);
        if(!$request->permissions)
        $request->permissions=[];
        $role->name = $request->name;
        $role->permissions = $request->permissions;
        $role->save();
    }
}