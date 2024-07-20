<?php

namespace App\Http\Controllers\User;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Mail\NotifyUserOnLoginMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Hash;
use App\Models\DisallowedPassword;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Symfony\Component\Console\Input\Input;

class LoginController extends Controller
{
    use AuthenticatesUsers;
    
    public function showForm () 
    {
        $title = env('APP_NAME');
        return view('auth.login', ['title' => $title]);
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();
    
        $request->session()->regenerateToken();

        return redirect()->route('logUserInForm');
    }

    public function logUserIn(Request $request){

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            Mail::to(Auth::user())->send(new NotifyUserOnLoginMail(Auth::user(), now()));

            return redirect()->intended('/dashboard');
        }

        // if ($request->filled('remember')) {
        //     Auth::login($user, true);
        // } else {
        //     Auth::login($user);
        // }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);

    }


}
