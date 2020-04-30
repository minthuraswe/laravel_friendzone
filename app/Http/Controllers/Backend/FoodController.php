<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Food;
use App\Model\Menu;
use Validator;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $food = Food::paginate(8);
        return view('food.index',compact('food')); 
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Menu::all();
        return view('food.create',compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $validatedData = Validator::make($request->all(),[
           'foodname' => 'required',
           'foodimage' => 'required',
           'foodingredient' => 'required',
           'foodprice' => 'required',
           'menuname' => 'required',
       ])->validate();

        $file = $request->file('foodimage');
        $filename = uniqid().'.'.$file->getClientOriginalExtension();
        $file->move(public_path(). '/uploads/', $filename);

        Food::create([
            'user_id' => auth()->id(),
            'foodname' => request('foodname'),
            'foodimage' => $filename,
            'foodingredient' => request('foodingredient'),
            'foodprice' => request('foodprice'),
            'menu_id' => request('menuname'),
        ]);

        return redirect('/food')->with('message','Successfully Uploaded!!');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $food = Food::where('foodname', 'like', '%'.$search.'%')->paginate(8);
      
        return view('food.search',compact('food'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
       $food = Food::find($id);
       return view('food.show', compact('food'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);
        $data = Menu::all();
        return view('food.edit',compact('food','data'));
        
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
        $validatedData = Validator::make($request->all(),[
            'foodname' => 'required',
            'foodimage' => 'required',
            'foodingredient' => 'required',
            'foodprice' => 'required',
            'menuname' => 'required',
        ])->validate();

        $file = $request->file('foodimage');
        $filename = uniqid().'.'.$file->getClientOriginalExtension();
        $file->move(public_path(). '/uploads/', $filename);

        $food = Food::find($id);
        $food->foodname = $request->foodname;
        $food->foodimage = $filename;
        $food->foodingredient = $request->foodingredient;
        $food->foodprice = $request->foodprice;
        $food->menu_id = $request->menuname;
        $food->save();
        return redirect('/food')->with('message', 'Successfully Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $food = Food::find($id);
        $food->delete();
        return redirect('/food')->with('message', 'Successfully Deleted!!');
    }
}
