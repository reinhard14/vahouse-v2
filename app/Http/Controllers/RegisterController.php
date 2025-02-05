<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function personalInformation () {
        return view('auth.register.personal-info');
    }
}
