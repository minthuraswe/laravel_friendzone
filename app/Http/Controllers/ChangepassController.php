<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\User;
use Auth;
use App\Model\Food;
use App\Model\Menu;
use App\Model\UserMessage;

class ChangepassController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $countForfood = Food::count();
        $food = Food::latest()->limit(6)->get();
        $usermessage = UserMessage::all();
        $countFormessage = UserMessage::count();
        $data = Menu::all();
        $countFormenu = Menu::count();

        return view('dashboard',compact('countForfood','food','usermessage','countFormessage','data', 'countFormenu'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $pass = $request->password;
        
        $mdpass = md5($pass);
        $shpass = sha1($mdpass);
        $crypass = crypt($mdpass, $shpass);
        $pass = $crypass;

        $new_pass = $request->new_pass;
        $md_new_pass = md5($new_pass);
        $sh_new_pass = sha1($md_new_pass);
        $cry_new_pass = crypt($md_new_pass, $sh_new_pass);

        $new_pass_confirm = $request->new_pass_confirm;

        if($pass != Auth::user()->password){
            return redirect()->back()->with('error', 'Your Current Password does not match.');
        }elseif($new_pass != $new_pass_confirm){
           return redirect()->back()->with('error', 'Your New Password does not match with Confirm Password');
        }elseif($pass == $cry_new_pass){
            return redirect()->back()->with('error', 'Your New Password can not be same as your current password');
        }else{
            $user = User::findOrfail($id);
            $user->password = $cry_new_pass;
            $user->save();
            return redirect('/changepassword')->with('success','Password Changed Successfully');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
