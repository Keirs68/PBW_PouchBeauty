<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function login()
    {
        return view('login',[]);
    }

    public function signup()
    {
        return view('signup',[]);
    }

    public function profil()
    {
        return view('profil',[]);
    }

}
