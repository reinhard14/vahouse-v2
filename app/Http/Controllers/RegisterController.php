<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class RegisterController extends Controller
{
    public function personalInformation() {
        return view('auth.register.personal-info');
    }

    public function personalInformationPost(Request $request) {

        $request->validate([
            'name' => 'required',
            'middlename' => 'required',
            'lastname' => 'required',
        ]);

        // Store in session
        Session::put('register_data.name', $request->name);
        Session::put('register_data.middlename', $request->middlename);
        Session::put('register_data.lastname', $request->lastname);
        Session::put('register_data.suffix', $request->suffix);
        Session::put('register_data.gender', $request->gender);

        return redirect()->route('register.account');
    }

    public function account() {
        // Retrieve session data
        // $data = Session::get('register_data');
        // dd($data);

        return view('auth.register.account');
    }

    public function accountPost(Request $request) {

        $request->validate([
            'email' => 'required',
            'password' => 'required',
            'captcha' => ['required', 'captcha'],
        ]);

        // Retrieve session data
        $data = Session::get('register_data');

        // Create the user
        $user = User::create([
            'name' => $data['name'],
            'middlename' => $data['middlename'],
            'lastname' => $data['lastname'],
            'suffix' => $data['suffix'],
            'gender' => $data['gender'],
            'email' => $request->input('email'),
            'password' => bcrypt($request->input('password')),
        ]);

        // Clear session data
        Session::forget('register_data');
    }


    public function verify() {
        return view('auth.register.verify');
    }
}
