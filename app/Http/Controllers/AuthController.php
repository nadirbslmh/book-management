<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuthController extends Controller
{
    // returns register page
    public function create()
    {
        return view('auth.register');
    }

    // perform user registration
    public function register(Request $request)
    {
        // validation
        $fields = $request->validate([
            'name' => ['required', 'min:6'],
            'email' => ['required', 'email', Rule::unique('users', 'email')],
            'password' => ['required', 'min:6']
        ]);

        // encrypt password 
        $fields['password'] = bcrypt($fields['password']);

        // create a new user
        $user = User::create($fields);

        // redirect to login page
        return redirect('/auth/login');
    }

    // return login page
    public function loginPage()
    {
        return view('auth.login');
    }

    // perform login
    public function login(Request $request)
    {
        // validation
        $fields = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required', 'min:6']
        ]);

        // attempt login
        if (auth()->attempt($fields)) {
            // if true, redirect to home page
            $request->session()->regenerate();

            return redirect('/');
        }

        // if false, return to login page
        return back()->withErrors(['email' => 'invalid credentials'])->onlyInput('email');
    }

    // perform logout
    public function logout(Request $request)
    {
        // perform logout
        auth()->logout();

        // regenerate token
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        // redirect to login page
        return redirect('/auth/login');
    }
}