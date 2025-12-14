<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
    public function create()
    {
        return view('auth.login');
    }

    public function store()
    {
        $attributes = request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required']
        ]);

        if (! Auth::attempt($attributes)) {
            throw ValidationException::withMessages([
                'email' => 'Sorry, those credentials do not match.'
            ]);
        }

        request()->session()->regenerate();


        if (Auth::user()->is_admin) {
            return redirect('/admin/dashboard');
        }

        return redirect('/jobs');
    }

    public function destroy()
    {
        Auth::logout();

        request()->session()->invalidate();
        request()->session()->regenerateToken();

        return redirect('/');
    }

    public function index()
    {
        return redirect()->route('admin.dashboard');
    }

    public function dashboard()
    {
        $jobsCount = \App\Models\Job::count();
        $newsCount = \App\Models\News::count();
        $messagesCount = \App\Models\ContactMessage::count();
        $usersCount = \App\Models\User::count();

        return view('admin.dashboard', compact('jobsCount', 'newsCount', 'messagesCount', 'usersCount'));
    }
}

