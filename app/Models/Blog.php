<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Blog extends Model
{
    use HasFactory;
    public static $blog,$image,$dir,$imgNewName,$imgUrl;

    public static function saveInfo($request){
     self::$blog = new Blog();
     self::$blog->title = $request->title;
     self::$blog->category_id = $request->category_id;
     self::$blog->author_name = $request->author_name;
     self::$blog->description = $request->description;
     self::$blog->image = self::saveImage($request);
     self::$blog->save();
    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imgNewName = $request->title.'_'.rand(1000,9999).'.'.self::$image->extension();
        self::$dir = 'back-end-assets/image/';
        self::$imgUrl=self::$dir.self::$imgNewName;
        self::$image->move(self::$dir,self::$imgNewName);
        return self::$imgUrl;
    }
    public function category(){
        return $this->BelongsTo(Category::class);
    }
}
