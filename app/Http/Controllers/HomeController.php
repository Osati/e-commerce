<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('front-end.home.index',[
            'blogs'=>Blog::where('status',1)->get(),
        ]);
    }
    public function services(){
        return view('front-end.service.service');
    }
    public function newCar(){
        return view('front-end.new-cars.new-car');
    }
    public function brands(){
        return view('front-end.brands.brand');
    }
    public function category(){
        return $this->belognsTo(Category::class);
    }
}
