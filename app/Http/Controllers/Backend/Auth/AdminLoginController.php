<?php

namespace App\Http\Controllers\Backend\Auth;

use App\Http\Controllers\Controller;
use Auth;
use App\Http\Requests\Backend\AdminLoginRequest;

class AdminLoginController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest:admin')->except(['logout']);
    }

    public function showLoginForm()
    {
        return view('backend.auth.login');
    }

    public function login(AdminLoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::guard('admin')->attempt($credentials)) {
            return redirect(route('backend.dashboard'));
        }

        return redirect()
            ->back()
            ->with('invalidLogin', __('auth.failed'))
            ->withInput($request->only('email'));
    }

    public function logout()
    {
        Auth::guard('admin')->logout();
        return redirect(route('backend.login'));
    }
}
