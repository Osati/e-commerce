<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VisitorAuthController extends Controller
{
    public function signupView(){
        return view('front-end.auth.signup');
    }
}
