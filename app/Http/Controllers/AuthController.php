<?php

namespace App\Http\Controllers;

use App\Mail\WelcomeMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;

class AuthController extends Controller
{
    public function show_login_form()
    {
        return view('auth.login');
    }

    public function show_register_form()
    {
        return view("auth.register");
    }

    public function register(Request $request)
    {
        $request->validate([
            'first_name' => 'required|min:2',
            'last_name' => 'required|min:2',
            'username' => 'required|min:2|unique:users,username',
            'email' => 'required|min:2|unique:users,email',
            'gender' => 'required|in:male,female',
            'password' => 'required|min:8|confirmed',
        ]);


        $user = new User();

        $user->first_name = $request->first_name;
        $user->last_name = $request->last_name;
        $user->email = $request->email;
        $user->gender = $request->gender;
        $user->username = $request->username;
        $user->name = $request->first_name . " " . $request->last_name;
        $user->password = Hash::make($request->password); // bcrypt

        $user->save();

        // send welcome mail ou bien mail de validation
        Mail::to($user)->send(new WelcomeMail($user));
        // connecte l'utilisateur
        Auth::login($user);

        return redirect()->route("home");
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route("login");
    }
}
