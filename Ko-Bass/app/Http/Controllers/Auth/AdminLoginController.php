<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    public function _construct()
    {
        $this->middleware('guest:admin');
    }




    public function showLoginForm()
    {
        return view('admin-login');
    }

    public function login()
    {
        return true;
    }
}
