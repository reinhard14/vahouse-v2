<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function personalInformation() {
        return view('auth.register.personal-info');
    }

    public function account() {
        return view('auth.register.account');
    }

    public function verify() {
        return view('auth.register.verify');
    }
}
