<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Food;
use App\Model\Menu;

class FoodByMenuController extends Controller
{
    public function index($id){
        $foodbymenu = Menu::find($id)->foods()->limit(12)->get();
        return view('frontend.foodbymenu',compact('foodbymenu'));
    }
}
