<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Food;
use App\Model\Menu;

class MenuController extends Controller
{
    public function index(){
        $food = Food::latest('updated_at')->paginate(18);
        $data = Menu::all();
        
        return view('frontend.menu',compact('food','data'));
    }

    public function find($id){
        $food = Menu::find($id)->foods()->paginate();
        $data = Menu::all();
        
        return view('frontend.menu',compact('food','data'));
    }
   
}

      

