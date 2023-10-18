<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;

class VisitorAuthController extends Controller
{
    public function signupView(){
        return view('front-end.auth.signup');
    }
    public function signStore($request){
        Visitor::saveinfo($request);
        return redirect(route('home'));
    }
}
