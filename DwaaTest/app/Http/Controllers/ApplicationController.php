<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\ApplicationOperated;

use Auth;
class ApplicationController extends Controller
{
    /**
     * Display all Applications.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $alert=0;
        return view('Application',compact('alert'));
    }

    /**
     * Store all Application Data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {

        $alert=0; 
        $this->validate($request,[
        'name'=>'required|max:50|String',
        'DOB'=>'required|max:10|date|before:today',
        'gen'=>'required|max:10|integer',
        'nat'=>'required|max:10|integer',
        'cv'=>'required|max:100',

        ]);
        
       $PDF=$request->cv;
       $newPDF=time().$PDF->getClientOriginalName();
       $PDF->move('upload/CVs/',$newPDF);
       $app=Application::create([
        'Name'=>$request->name,
        'DOB'=>$request->DOB,
        'genderId'=>$request->gen,
        'NationalityId'=>$request->nat,
        'CV'=>$newPDF,
        'CoordinatorOperated'=>'0',
        'AdminOperated'=>'0',
        ]);

        $alert=1;

        return redirect()->route('App', compact('alert'));;


    }


    /**
     * Show all Application to HR Coordinators
     *  before Acception Or Rejection.
     * 
     * @return \Illuminate\Http\Response
     */

    public function showAppInCoordinator()
    {
        $alert='';
        $user=Auth::user();

        $applys= Application::where('CoordinatorOperated',0)->orderBy('id', 'desc')->get();

        return view('HRCoordinatorSide.en.home', compact('applys','alert','user'));
    }



    /**
     * Acception Envent for Application 
     * From HR Coordinator
     *
     * @param  Application ID  $id
     * Update CoordinatorOperated feild in Application table to 1
     * set AdminAcception feild in ApplicationOperated table to 1
     * 
     */

    public function CoordinatorAcception($id)
    {
        $app=Application::find($id);

        $user=Auth::user();
        $apptoAdmin=ApplicationOperated::create([
        'appID'=>$app->id,
        'CoordinatorAcception'=>'1',
        'CoordinatorRejection'=>'0',
        'AdminAcception'=>'0',
        'AdminRejection'=>'0',
        ]);

        $app->CoordinatorOperated='1';
        $app->save();
        $alert='Accepted';
        $applys= Application::where('CoordinatorOperated',0)->orderBy('id', 'desc')->get();
        return view('HRCoordinatorSide.en.home', compact('applys','alert','user'));
       }

    

    /**
     *Rejection Envent for Application 
     * From HR Coordinator
     *
     * @param  Application ID  $id
     * Update CoordinatorOperated feild in Application table to 1
     * set AdminRejection feild in ApplicationOperated table to 1
     * 
     */
    public function CoordinatorRejction($id)
    {
        $app=Application::find($id);
        
        $user=Auth::user();
        $apptoAdmin=ApplicationOperated::create([
        'appID'=>$app->id,
        'CoordinatorAcception'=>'0',
        'CoordinatorRejection'=>'1',
        'AdminAcception'=>'0',
        'AdminRejection'=>'0',
        ]);


        $app->CoordinatorOperated='1';
        $app->save();
        $alert='Rejected';
        $applys= Application::where('CoordinatorOperated',0)->orderBy('id', 'desc')->get();
        return view('HRCoordinatorSide.en.home', compact('applys','alert','user'));
    }


    /**
     *
     * Show All Applications in HR Manager Page
     * 
     */
    public function showAppInAdmin()
    {
        $alert='';
        $applys= Application::where('CoordinatorOperated',1)->where('AdminOperated',0)->orderBy('id', 'desc')->get();
        return view('admin.Applications.review', compact('applys','alert'));
    }



    /**
     *Acception Envent for Application 
     * From HR Manager
     *
     * @param  Application ID  $id
     * Update AdminOperated feild in Application table to 1
     * set AdminAcception feild in ApplicationOperated table to 1
     * 
     */
    public function AdminAcceptionOperation($id)
    {
        $apptoAdmin=ApplicationOperated::where('appID',$id)->first();
        $apptoAdmin->AdminAcception='1';
        $apptoAdmin->save();

        $app=Application::find($id);
        $app->AdminOperated='1';
        $app->save();
        $alert='Accepted';
        $applys= Application::where('CoordinatorOperated',1)->where('AdminOperated',0)->orderBy('id', 'desc')->get();
        return view('admin.Applications.review', compact('applys','alert'));
    }


    /**
     *Rejection Envent for Application 
     * From HR Manager
     *
     * @param  Application ID  $id
     * Update AdminOperated feild in Application table to 1
     * set AdminRejection feild in ApplicationOperated table to 1
     * 
     */
    public function AdminRejctionOperation($id)
    {

        $apptoAdmin=ApplicationOperated::where('appID',$id)->first();
        $apptoAdmin->AdminRejection='1';
        $apptoAdmin->save();


        $app=Application::find($id);
        $app->AdminOperated='1';
        $app->save();
        $alert='Rejected';
        $applys= Application::where('CoordinatorOperated',1)->where('AdminOperated',0)->orderBy('id', 'desc')->get();
        return view('admin.Applications.review', compact('applys','alert'));
    }


    /**
     * Show all Application to HR Coordinators
     *  After Acception Or Rejection.
     * 
     * @return \Illuminate\Http\Response
     */

    public function ReportAllApplication()
    {
        $user=Auth::user();
        $id=Auth::id();
        $applications= Application::where('CoordinatorOperated',1)
        ->orderBy('id', 'desc')
        ->get();
        
        return view('HRCoordinatorSide.en.Report', compact('applications','user'));
    }




}
