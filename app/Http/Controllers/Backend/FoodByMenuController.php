<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Menu;
use App\Model\Food;

class FoodByMenuController extends Controller
{
    public function index($id){
        $food = Menu::find($id)
                ->foods()
                ->paginate(6);
        // $data = Menu::all();
        return view('food.foodbymenu',compact('food'));
    }


}
