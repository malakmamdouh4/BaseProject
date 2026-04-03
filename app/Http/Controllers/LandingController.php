<?php

namespace App\Http\Controllers;

class LandingController extends Controller
{
    public function redirectToDashboard()
    {
        if (auth('admin')->check()) {
            return redirect()->route('admin.dashboard');
        }
        return redirect()->route('admin.login');
    }
}