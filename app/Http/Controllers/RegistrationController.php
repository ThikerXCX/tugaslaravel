<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class RegistrationController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }
    public function store(Request $request)
    {
        request()->validate([
            'name' => ['required', 'string', 'min:3'],
            'username' => ['required', 'string', 'min:3', 'unique:user'],
            'email' => ['required', 'email'],
            'password' => ['required', 'min:3']
        ]);
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
    }
}
