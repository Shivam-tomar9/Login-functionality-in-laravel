<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AdminAuthController extends Controller
{
    public function login(Request $request)
    {
        if ($request->isMethod('get')) {

            return view('admin.auth.login');
        }
        if ($request->isMethod('post')) {

        
        
            if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {

                return redirect(route('admin.dashboard'));
            } else {

                return back()->with('error', 'invalid Credentials');
            }
    }
    }
}
