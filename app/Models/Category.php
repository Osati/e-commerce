<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use function Symfony\Component\HttpFoundation\setFile;

class Category extends Model
{
    use HasFactory;
    public static $category;

    public static function saveInfo($request,$id=null){
        if ($id != null){
            self::$category = Category::find($id);
        }else{
            self::$category = new Category();
        }
        self::$category->category_name = $request->category_name;
        self::$category->save();
    }
    public static function statusCheck($id){
        self::$category =Category::find($id);
        if(self::$category->status==1){
            self::$category->status=0;
        }else{
            self::$category->status=1;
        }
        self::$category->save();
    }
    public static function deletedInfo($id){
        self::$category = Category::find($id);
        self::$category->delete();
    }
}
