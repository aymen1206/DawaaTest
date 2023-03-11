<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

use Illuminate\Http\Request;

use Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */


    protected $redirectTo = RouteServiceProvider::HOME;


    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }



/**********
 *
 * this to verifiy Email and Passwor are correct 
 * and redirect evryuser to specific page
 *  depands on his role
 *  
 * ************/
    public function login(Request $request){
        $input=$request->all();
        $this->validate($request,[
            'email'=>'required|email',
            'password'=>'required'
        ]);

        if (auth()->attempt(['email'=>$input["email"] ,'password'=>$input["password"] ])) {
            if (auth()->user()->role=='HRManager') {
                return redirect()->route('admin.home');
            }
            else if (auth()->user()->role=='HRCoordinator') {
                return redirect()->route('App.show');
            }
           
        }
        else{
            return redirect()
            ->route("login")
            ->with("message",'كلمة المرور او البريد الالكتروني خاطئ   ');
        }
    }



}
