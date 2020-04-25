<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Food;
use App\Model\UserMessage;
use App\Model\Menu;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $food = Food::latest()->limit(6)->get();
        $usermessage = UserMessage::all();
        $data = Menu::all();
        $countForfood = Food::count();
        $countFormessage = UserMessage::count();
        $countFormenu = Menu::count();
        
        return view('dashboard', compact(
            'food','usermessage','data',
            'countForfood','countFormessage','countFormenu'
        ));
    }

    // public function home(){
    //     return view('auth.login');
    // }
}

  
