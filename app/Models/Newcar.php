<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newcar extends Model
{
    use HasFactory;
    public static $newcar,$image,$imgNewName,$dir,$imgUrl;

    public static function saveInfo($request){
        self::$newcar = new Newcar();
        self::$newcar->title = $request->title;
        self::$newcar->category_name = $request->category_name;
        self::$newcar->author_name = $request->author_name;
        self::$newcar->description = $request->description;
        self::$newcar->image = self::saveImage($request);
        self::$newcar->product_mrp = $request->product_mrp;
        self::$newcar->save();
    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imgNewName = rand().'.'.self::$image->extension();
        self::$dir ='back-end-assets/new-cars/image/';
        self::$imgUrl =self::$dir.self::$imgNewName;
        self::$image->move(self::$dir,self::$imgNewName);
        return self::$imgUrl;
    }
}
