<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function processInput(Request $request)
    {
        $myinput = $request->input('myinput');
        return view('myview', compact('myinput'));
    }
}

