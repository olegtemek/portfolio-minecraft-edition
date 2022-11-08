<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view('admin.login');
    }
    public function login(Request $req)
    {
        $data = $req->validate(['email' => 'required', 'password' => 'required']);
        if (!auth()->attempt($req->only('email', 'password'))) {
            return redirect('/admin/login')->with('message', 'Error try again');
        }
        return redirect('/admin');
    }
}
