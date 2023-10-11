<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;
use function Livewire\Features\SupportTesting\get;

class FeaturedController extends Controller
{
    public function featured(){
        return view('front-end.featured.feature',[
            'blogs'=>Blog::where('status',1)->get()
        ]);
    }
    public function category(){
        return $this->belognsTo(Category::class);
    }
}
