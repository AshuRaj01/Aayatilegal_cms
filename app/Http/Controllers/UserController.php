<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {
        return view('Auth.login');
    }

    public function login(Request $request)
    {

        // dd($request->all());
        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            // Get the User Name
            $user = Auth::user();
            $userName = $user->name;
            // Store the User Name in the session
            $request->session()->put('userName', $userName);
            // Optionally, you can also store the user ID
            $request->session()->put('userId', $user->id);

            return redirect()->intended('backoffice/dashboard'); // Redirect to dashboard route
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->withInput();
    }
    
    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('cb-admin')->with('message', 'Logged out successfully');
    }
}
