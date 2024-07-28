<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){
        return view('register');
    }

    public function registerPost(Request $request){
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6|confirmed',
        ]);
    
        $user = new User();
    
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
    
        $user->save();
    
        return redirect('/student')->with('success', 'registered');
    }

    public function login(){
        return view('login');
    }

    public function loginPost(Request $request){
        
        $request->validate([
            'email' => 'required|email',
            'password' => 'required', // Ensure password is required
        ]);
        
        $credentials = [ 
           'email' => $request->email,
           'password'=> $request->password,
        ];

    if(Auth::attempt($credentials)){
        return redirect('/student')->with('success', 'Login Success');
    }

    return back()->with('error', 'Your Email & Password is incorrect.');
}

public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/login')->with('success', 'Logged out successfully');
    }
}
