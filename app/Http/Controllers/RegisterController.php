<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function store(Request $request)
    {

        if ($request->password === $request->confirmPassword) {
            User::create([
                'name' => $request->name,
                'username' => $request->username,
                'password' => bcrypt($request->password),
            ]);
        }
        return redirect('/login');
    }
}
