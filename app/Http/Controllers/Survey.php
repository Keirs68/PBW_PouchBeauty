<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class survey extends Controller
{
    public function survey()
    {
        return view('survey',[]);
    }

    public function skin_check()
    {
        return view('skin-check',[]);
    }
}
