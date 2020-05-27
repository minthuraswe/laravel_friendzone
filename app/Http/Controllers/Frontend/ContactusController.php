<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\UserMessage;
use Validator;

class ContactusController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usermessage = UserMessage::paginate(6);
        return view('userfeedback.show', compact('usermessage'));
    }
    public function home()
    {
        return view('frontend.contact');
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
        $validatedData = Validator::make($request->all(),[
            'name' => 'required',
            'email' => 'required',
            'message' => 'required',
        ])->validate();

        $usermessage = new UserMessage;

        $usermessage->username = $request->name;
        $usermessage->useremail = $request->email;
        $usermessage->usermessage = $request->message;
        $usermessage->save();

        return redirect('contact')->with('status','Thanks for your contact.');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $usermessage = UserMessage::find($id);
        $usermessage->destroy($id);

        return redirect('feedback')->with('status','Successfully Deleted!!');
    }
}
