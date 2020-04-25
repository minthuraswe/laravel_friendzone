<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Food;
use App\Model\Menu;

class HomeController extends Controller
{
    public function index(){
        $data = Menu::all();
        $food = Food::latest()->paginate(8);
        return view('frontend.index', compact('data', 'food'));
    }
}



