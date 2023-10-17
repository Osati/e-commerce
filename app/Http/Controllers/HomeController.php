<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use App\Models\Newcar;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front-end.home.index',[
            'blogs'=>Blog::where('status',1)->get(),
            'newcars'=>Newcar::where('status',1)->get(),
        ]);
    }
    public function services(){
            return view('front-end.service.service');
    }
    public function newCar(){
        return view('front-end.new-cars.new-car',[
            'newcars'=>Newcar::where('status',1)->get()
        ]);
    }
//    public function newCar(){
//        return view('front-end.new-cars.new-car',[
//            'newcars'=>Newcar::where('status',1)->get(),
//        ]);
//    }
    public function brands(){
        return view('front-end.brands.brand');
    }

    public function featured(){
        return view('front-end.featured.feature',[
            'blogs'=>Blog::where('status',1)->get()
        ]);
    }
    public function category(){
        return $this->belognsTo(Category::class);
    }

}
