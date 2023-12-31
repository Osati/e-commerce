<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Category;

class Blog extends Model
{
    use HasFactory;
    public static $blog,$image,$dir,$imgNewName,$imgUrl;

    public static function saveInfo($request,$id=null){

        $request->validate([
            'title' => 'required | string | min:5 | max:25',
            'category_id'=> 'integer',
            'author_name'=> 'required',
            'description'=> 'required | min:10',
            'image'=> 'nullable|image|mimes:jpg,png|max:500|min:2',

        ],
            [
                'title.required'=>'Please Give a Title.',
                'title.string'=>'Please Give a Char title.',
                'title.min'=>'Please Give must be a more-then 5 Char.',
                'title.max'=>'Please Give must be a less-then 25 Char.',

                'category_id.integer'=>'Please Select Category Name.',
                'author_name.required'=>'Please Give A Author Name.',
                'description.required'=>'Please Give A Description.',
                'description.min'=>'Please Give must be a more-then 10 Char.',
                'image'=>'image type must be jpg or png',
              'image.min'=>'image size must be greater then 2KB',
              'image.max'=>'image size must be less then 500KB'
            ]
        );


        if($id!=null){
            self::$blog = Blog::find($id);
        }else{
            self::$blog = new Blog();
        }
     self::$blog->title = $request->title;
     self::$blog->category_id = $request->category_id;
     self::$blog->author_name = $request->author_name;
     self::$blog->description = $request->description;
     self::$blog->product_mrp = $request->product_mrp;
     if($request->file('image')){
         if(self::$blog->image){
             if(file_exists(self::$blog->image)){
                 unlink(self::$blog->image);
             }
         }
         self::$blog->image = self::saveImage($request);
     }

     self::$blog->save();
    }
    private static function saveImage($request){
        self::$image = $request->file('image');
        self::$imgNewName = rand(1000,9999).'.'.self::$image->extension();
        self::$dir = 'back-end-assets/image/';
        self::$imgUrl=self::$dir.self::$imgNewName;
        self::$image->move(self::$dir,self::$imgNewName);
        return self::$imgUrl;
    }
    public static function statusCheck($id){
        self::$blog = Blog::find($id);
        if(self::$blog->status==1){
            self::$blog->status = 0;
        }
        else{
            self::$blog->status = 1;
        }
        return self::$blog->save();
    }

    public static function deleteInfo($id){
        self::$blog = Blog::find($id);
        if (self::$blog->image){
            if (file_exists(self::$blog->image)){
                unlink(self::$blog->image);
            }
            self::$blog->delete();
        }
    }
    public function category(){
        return $this->BelongsTo(Category::class);
    }
}
