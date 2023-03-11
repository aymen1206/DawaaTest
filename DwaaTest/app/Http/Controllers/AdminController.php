<?php

namespace App\Http\Controllers;
use Auth;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Check Auth
     *
     * @return void
     */

    public function __construct(){
        $this->middleware('auth');
    }

  


    /**
     * Show the HR Manager Home Page.
     *
     * @return view 
     */

    public function index()
    {
        return view('admin.homeAdmin');
    }

    /**
     * Display Profile Details.
     *
     * @return some to Edite data of the HR Manager
     */
    public function Profile()
    {
        //
        $user=Auth::user();
        $id=Auth::id();
         $alert='';
        return view('admin.profile',compact('alert','user'));
    }

    /**
     * Update HR Manager Details.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {

        $this->validate($request,[
            'name'=> 'required',
            'ema'=> 'required',
            'ph'=> 'required',
            'address'=> 'required'

        ]);

        $user=Auth::user();
        if(!empty($request['pw'])){$user->password = Hash::make($request['pw']);}       
        $user->name = $request->name;
        $user->email = $request->ema;
        $user->phone = $request->ph;
        $user->address = $request->address;
        $user->save();

         $alert='done';
        return view('admin.profile',compact('alert','user'));
    }

}
