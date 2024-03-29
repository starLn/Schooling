<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function authenticating(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        } 
 
        Session()->flash('status', 'failed');
        Session()->flash('message', 'Login failed!');

        return redirect('/login');

    }
    public function logout(Request $request)
    {
        // dd('ini adalah logout');
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        
        Session()->flash('status', 'success');
        Session()->flash('message', 'Anda telah logout!');

        return redirect('/login');
    }
}
