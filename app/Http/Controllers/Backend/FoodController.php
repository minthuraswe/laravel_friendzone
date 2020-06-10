<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Model\Food;
use App\Model\Menu;
use Illuminate\Http\Request;
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
        $food = Food::paginate(5);
        return view('food.index', compact('food'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = Menu::all();
        return view('food.create', compact('data'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'name' => 'required',
            'image' => 'required',
            'ingredient' => 'required',
            'price' => 'required',
            'menuname' => 'required',
        ])->validate();

        $file = $request->file('image');
        $filename = uniqid() . '.' . $file->getClientOriginalExtension();
        $file->move(public_path() . '/uploads/', $filename);

        Food::create([
            'user_id' => auth()->id(),
            'foodname' => request('name'),
            'foodimage' => $filename,
            'foodingredient' => request('ingredient'),
            'foodprice' => request('price'),
            'menu_id' => request('menuname'),
        ]);

        return redirect('food')->with('message', 'Successfully Uploaded!!');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $food = Food::where('foodprice', 'like', '%' . $search . '%')
            ->orwhere('foodname', 'like', '%' . $search . '%')->paginate();
        $search_count = count($food);

        return view('food.search', compact('food', 'search', 'search_count'));
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
        return view('food.edit', compact('food', 'data'));
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
        $food = Food::find($id);
        $food->foodname = $request->name;
        $food->foodingredient = $request->ingredient;
        $food->foodprice = $request->price;
        $food->menu_id = $request->menuname;
        $food->save();
        return redirect('food')->with('message', 'Successfully Updated!!');
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
        return redirect('food')->with('message', 'Successfully Deleted!!');
    }

}
