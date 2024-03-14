<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showRegistrationForm()
    {
        return view('register');
    }

    public function register(Request $request)
    {
        // Validasi form jika diperlukan

        $firstName = $request->input('first_name');
        $lastName = $request->input('last_name');
        $email = $request->input('email');
        $gender = $request->input('gender');

        return redirect()->route('welcome', ['first_name' => $firstName, 'last_name' => $lastName, 'email' => $email, 'gender' => $gender]);
    }

    public function showWelcome(Request $request)
    {
        $firstName = $request->query('first_name');
        $lastName = $request->query('last_name');
        $email = $request->input('email');
        $gender = $request->input('gender');

        return view('welcome', ['first_name' => $firstName, 'last_name' => $lastName, 'email' => $email, 'gender' => $gender]);
    }
}
