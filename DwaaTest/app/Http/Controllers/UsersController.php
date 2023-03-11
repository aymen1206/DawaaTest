<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Invoice;
use Illuminate\Http\Request;


class UsersController extends Controller
{
    /**
     * Auth 
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display Adding new Hr Coordinator Form.
     *
     * @return void
     */
    public function index()
    {   $alert='';
        return view('admin.hrCoordinators.users',compact('alert'));
    }

    /**
     *Save new Hr Coordinator Account Details.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return void
     */
    public function store(Request $request)
    {

        $type=0; 
        
        $this->validate($request,[
            'name'=>'required',
            'ph'=>'required',
            'address'=>'required',
            'ema'=>'required',
            'pw'=>'required',

        ]);
        
        $usersValidation=User::where('email',$request->ema)->first();
        if (is_null($usersValidation)) {
        $users=User::create([
        'name'=>$request->name,
        'phone'=>$request->ph,
        'address'=>$request->address,
        'email'=>$request->ema,
        'password'=>Hash::make($request['pw']),
        'role'=>$type,
        ]);
         $alert='done';
        }else{
         $alert='emailDeplicated';
        }
       
        return view('admin.hrCoordinators.users',compact('alert'));

    }

    /**
     * Display All Hr Coordinators Accounts 
     * in the System 
     *
     * @return user
     */
    public function show()
    {
        $alert="";
        $users= User::where('role',0)->orderBy('id', 'desc')->get();

        return view('admin.hrCoordinators.users-Managment', compact('users','alert'));
    }

    /**
     * Show the form for editing Specifc 
     * Hr Coordinator Account Details.
     *
     * @param  $User ID
     * @return void
     */   
    public function edit($id)
    {
     $alert="";
     $user=User::find($id);
     return view('admin.hrCoordinators.edite',compact('user','alert'));
    }

    /**
     * Update the specified HR Coordinator Account.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */    
    public function update(Request $request)
    {
        $id=$request->id;
        $user=User::find($id);
        $type=0;

        
        if(!empty($request['pw'])){$user->password = Hash::make($request['pw']);}
         $user->name=$request->name;
         $user->phone=$request->ph;
         $user->address=$request->address;
         $user->email=$request->ema;
         $user->role=$type;
         $user->save();

         $alert='done';

        return view('admin.hrCoordinators.edite',compact('alert','user'));
    }

    /**
     * Remove the specified HR Coordinator.
     *
     * @param   $user ID
      * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {   
        $user=User::find($id);
        $user->delete();
        $alert='deleted';
        $users= User::where('role',0)->orderBy('id', 'desc')->get();
        return view('admin.hrCoordinators.users-Managment', compact('users','alert'));
    }
}
