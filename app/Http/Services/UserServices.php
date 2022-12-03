<?php 

namespace App\Http\Services;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Traits\ImgTrait;
use Illuminate\Support\Facades\Hash;

class UserServices
{
    use ImgTrait;
    
    public function handleGetUser()
    {
        return User::get();
    }

    public function handleFindUser($id)
    {
        return User::findOrFail($id);
    }

    public function handleDeleteUser($id) : void
    {
        $this->handleFindUser($id)->delete();
    }

    public function handleStoreUser(Request $request) : void
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' =>Hash::make($request->password),
            'role_id' => $request->role_id,
            'photo' => $this->SaveImg($request, 'uploads/images')
        ]);
    }

    public function handleUpdateUser(Request $request, $id) : void
    {
        $user = $this->handleFindUser($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role_id = $request->role_id;
        $user->photo = $this->SaveImg($request, 'uploads/images');
        $user->save();
    }
}