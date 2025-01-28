<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    public function processInput(Request $request)
    {
        // รับข้อมูลจากฟอร์ม
        $myinput = $request->input('myinput');

        // ส่งค่ากลับไปยัง view พร้อมข้อมูล
        return view('myview', compact('myinput'));
    }
}

