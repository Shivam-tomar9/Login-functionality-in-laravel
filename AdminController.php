<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function add()
    {
        return view('admin.app');
    }
    public function dashboard()
    {
        return view('admin.dashboard');
    }
}
