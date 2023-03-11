<?php

namespace App\Http\Controllers;
use App\Models\User;
use Auth;
use Illuminate\Http\Request;

class HRController extends Controller
{

    /**
     * Show Hr Coordinator Profile Details.
     *
     * @return void
     */
     public function index()
    {
     $alert="";
     $id=Auth::id();
     $user=User::find($id);
     return view('HRCoordinatorSide.en.profile',compact('user','alert'));
    }

    /**
     * Update Hr Coordinator Profile Details.
     *
     * @return void
     */

    public function update(Request $request)
    {
        $this->validate($request,[
            'email'=> 'required',
            'phone'=> 'required',
            'address'=> 'required'
        ]);
        
        $id=Auth::id();
        $user=User::find($id);
        if(!empty($request['pw'])){$user->password = Hash::make($request['pw']);}
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->address = $request->address;
        $user->save();

        $alert='done';

        return view('HRCoordinatorSide.en.profile',compact('alert','user'));
    }

}
