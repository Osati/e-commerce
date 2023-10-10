<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FeaturedController extends Controller
{
    public function featured(){
        return view('front-end.featured.feature',[
            'blogs'=>Blog::all(),
        ]);
    }
    public function category(){
        return $this->belognsTo(Category::class);
    }
}
