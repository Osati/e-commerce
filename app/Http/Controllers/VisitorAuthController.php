<?php

namespace App\Http\Controllers;

use App\Models\Visitor;
use Illuminate\Http\Request;
use Session;

class VisitorAuthController extends Controller
{
    public static $visitor;
    public function visitorLogin(){
        return view('front-end.visitor.signin');
    }
    public function visitorLoginCheck(Request $request){
        self::$visitor = Visitor::where('email',$request->email)->first();
        if(self::$visitor){
            if(password_verify($request->password,self::$visitor->password)){

                Session::put('visitorId',self::$visitor->id);
                Session::put('visitorEmail',self::$visitor->email);
                Session::put('visitorName',self::$visitor->username);

                return redirect(route('home'));
            }else{
                return back()->with('message','please use valid password');
            }
        }else{
            return back()->with('message','Please use valid email');
        }
    }

    public function signupView(){
        return view('front-end.visitor.signup');
    }
    public function signStore(Request $request){
        Visitor::saveUser($request);
        return redirect(route('home'));
    }
    public function logout(){

        Session::forget('visitorId');
        Session::forget('visitorEmail');
        Session::forget('visitorName');
        return back();
    }
}
