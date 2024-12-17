<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegister()
    {
        return view('form');
    }
    public function addRegister(Request $request)
    {
        $data = [
            'fname' => $request->input('fname'),
            'lname' => $request->input('lname'),
            'gender' => $request->input('gender'),
            'nationally' => $request->input('nationality'),
            'language' => $request->input('languages'),
            'bio' => $request->input('bio'),
        ];

        return view('welcome', $data);
    }
}
