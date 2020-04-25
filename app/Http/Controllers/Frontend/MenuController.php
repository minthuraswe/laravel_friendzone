<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Food;
use App\Model\Menu;
use App\Model\UserMessage;

class MenuController extends Controller
{
    public function index(){
        $food = Food::all();
        $data = Menu::all();
        return view('frontend.menu',compact('food','data'));
    }

    public function find($id){
        $food = Menu::find($id)
                    ->foods()
                    ->latest()
                    ->get();
        $data = Menu::all();
        
        return view('frontend.menu',compact('food','data'));
    }
   
}

      

