<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\motor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
    public function register_index()
    {
        return view('Login.register');
    }

    public function register_store(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50',
            'username' => 'required|max:50',
            'email' => 'required|email:dns|unique:users',
            'no_telepon' => 'required|max:13',
            'alamat' => 'required|max:50',
            'password' => 'required|min:5|max:50'
        ]);

        $user = new User([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'no_telepon' => $request->no_telepon,
            'alamat' => $request->alamat,
            'password' => Hash::make($request->password),
        ]);
        
        $user->save();
        

        return redirect('/login')->with('success', 'Registration Success! Please Login!');

    }

    public function login_index()
    {
        return view('Login.login');

    }

    public function authenticate(Request $request)
    {
        $request->validate([
            'username' => 'required|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt(['username' => $request->username, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }

    public function logout()
    {
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }

    public function profil_user()
    {
        $users = User::find(1);
        $total = [];
        $total['Total Motor Dagangan'] = Motor::all()->count();
        $total['Total Modal'] = Motor::all()->sum('modal');
        $total['Total Keuntungan'] = Motor::where('status', 'Sold')->sum('keuntungan');
        return view('Admin.Profil.profil', compact('users','total'));
    }
}
