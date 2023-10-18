<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Visitor extends Model
{
    use HasFactory;
    public static $visitor;

    public static function saveinfo($request){
        self::$visitor = new Visitor();
        self::$visitor->$request->username;
        self::$visitor->email = $request->email;
        self::$visitor->phone = $request->phone;
        self::$visitor->password = $request->password;
        self::$visitor->save();
    }
}
