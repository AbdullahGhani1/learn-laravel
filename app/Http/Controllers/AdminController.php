<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class AdminController extends Controller
{
    public function AdminProfile()
    {
        return view('admin.admin_profile');
    }

    public function AdminProfileEdit()
    {
        return view('admin.admin_profile_edit');
    }

    public function AdminLogout(Request $request):RedirectResponse
    {
        Auth::guard('web')->logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
