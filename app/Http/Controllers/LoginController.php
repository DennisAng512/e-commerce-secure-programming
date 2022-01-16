<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index() {
        return view('login', [
            'title' => 'Login'
        ]);
    }

    public function authenticate(Request $request) {
        $credential = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:8', 'max:255']
        ]);

        if(Auth::attempt($credential)) {
            $request->session()->regenerate();
            if (Auth::user()->is_admin){
                return redirect()->intended('/admin/book');
            }
            else{
                return redirect()->intended('/');
            }
        }

        return back()->with('error', 'Login failed!!');
    }

    public function logout(Request $request) {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

}
