<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Http\Requests\Auth\LoginRequestAdmin;
use App\Providers\RouteServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
 
    public function create()
    {
        return view('auth.admin_login');
    }

    public function store(LoginRequestAdmin $request)
    {
        $request->authenticate();

        $request->session()->regenerate();

        return redirect()->intended(RouteServiceProvider::ADMIN);
    }

    // public function showLoginForm()
    // {
    //     if (Auth::guard('admin')->check()) {
    //         // return redirect()->route('dashboard.index');
    //         return redirect()->intended(RouteServiceProvider::ADMIN);
    //     } else {
    //         return view('auth.login');
    //     }
    // }
}
