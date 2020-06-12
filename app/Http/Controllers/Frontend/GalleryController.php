<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Food;

class GalleryController extends Controller
{
    public function index(){
        $food = Food::latest('updated_at')->limit(20)->get();
        // $foodforCount = Food::count();
        return view('frontend.gallery', compact('food'));

    }
}
