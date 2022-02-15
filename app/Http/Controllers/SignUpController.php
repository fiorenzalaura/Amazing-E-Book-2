<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SignUpController extends Controller
{
    //
    public function indexSignUp()
    {
        return view('auth.signup');
    }
}
