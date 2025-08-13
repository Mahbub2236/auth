<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function registerPage()
        { 
        return view('register');
        }

    public function register(Request $request)
        { 
            $request->validate([
                'name' => 'required|string|max:255',
                'email' => 'required|email|unique:users,email',
                'password' => 'required|min:6|confirmed',
            ]);

            $user = User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => Hash::make($request->password),
            ]);
           return redirect('/login-page')->with('success', 'Registration successful. Please login.');
        }



    public function loginPage(){
        return view('login');
    }

    public function login(Request $request){

        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            ]);

        $user = User::where('email', $request->email)->first();
        if (!$user || !Hash::check($request->password, $user->password)) {
            return back()->withErrors(['email' => 'Invalid credentials'])->withInput();
        }

        // Set cookie with user info (encrypted for security)
        return redirect('/dashboard')
            ->withCookie(cookie('user_id', $user->id, 60)) // 60 minutes
            ->withCookie(cookie('user_name', $user->name, 60));
        }

    public function logout(){
          return redirect('/login-page')
            ->withCookie(cookie()->forget('user_id'))
            ->withCookie(cookie()->forget('user_name'));
    }



}
