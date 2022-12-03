<?php

namespace App\Http\Controllers;

use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function login()
    {
        return view('auth.login');
    }

    public function store(LoginRequest $request)
    {
        $field = filter_var($request->field, FILTER_VALIDATE_EMAIL) ? 'email': 'phone';
        if(Auth::attempt([$field => $request->field, 'password' => $request->password])){
            if(in_array(auth()->user()->role->name,['Super Admin','Admin'])){
                return redirect()->route('admin.home');
            }
                return redirect()->route('client.home');
        }
        return redirect()->back()->withErrors('These credentials do not match our records');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
