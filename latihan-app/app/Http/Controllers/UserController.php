<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    // Menampilkan halaman login
    public function showLogin()
    {
        return view('signin');
    }

    // Memproses login
    public function login(Request $request)
    {
        $data = $request->session()->get('user');

        if ($data && $data['email'] === $request->email && $data['password'] === $request->password) {
            $request->session()->put('user.is_login', true);
            return redirect('/profile')->with('success', 'Login Successful!');
        }

        return redirect('/signin')->with('error', 'Invalid Credentials');
    }

    // Menampilkan halaman register
    public function showRegister()
    {
        return view('signup');
    }

    // Memproses register
    public function register(Request $request)
    {
        $data = $request->only(['email', 'password', 'name']);
        session()->put('user', $data);
        return redirect('/signin')->with('success', 'Registration Successful!');
    }
}
