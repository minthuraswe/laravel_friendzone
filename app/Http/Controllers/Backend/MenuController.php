<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use App\Model\Menu;
use Validator;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Menu::paginate(5);
        return view('menu.index',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('menu.create');
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
            'menu_name' => 'required',
        ])->validate();
       
        Menu::create($request->except('_token'));
        return redirect('/menu')->with('message','Successfully Created!!');
    }

    public function search(Request $request)
    {
        $search = $request->get('search');
        $data = DB::table('menus')->where('menu_name', 'like', '%'.$search.'%')->paginate(5);
        return view('menu.search',compact('data'));
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
        $data = Menu::find($id);
        return view('menu.edit',compact('data'));
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
        $validatedData = Validator::make($request->all(), [
            'menu_name' => 'required',
        ])->validate();

        $data = Menu::find($id);
        $data->menu_name = $request->menu_name;

        $data->save();
        return redirect('/menu')->with('message', 'Successfully Updated!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Menu::find($id)->delete();
        return redirect('/menu')->with('message', 'Successfully Deleted!!');
    }

    // private function validateRequest()
    // {
    //     return  request()->validate([
    //         'menuname' => 'required',
    //     ]);
    // }
}
