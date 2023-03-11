<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\Application;
use App\Models\ApplicationOperated;
use Illuminate\Support\Facades\Validator;
use Auth;
class ApplicationAPIController extends Controller
{
    
    /**
     * Store all Application Data.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function submit(Request $request)
    {

        $validator=validator::make($request->all(),[
        'Name'=>'required|max:50|String',
        'DOB'=>'required|max:10|date|before:today',
        'genderId'=>'required|max:10|integer',
        'NationalityId'=>'required|max:100|integer',
        'CV'=>'required',
        ]);
        

        if ($validator->fails()) {
            return response()->json([
                'status'=>422,
                'errors'=> $validator->messages()
            ], 422);
        }
        else{

            $PDF=$request->CV;
            $newPDF=time().$PDF->getClientOriginalName();
            $PDF->move('upload/CVs/',$newPDF);
            $app=Application::create([
            'Name'=>$request->Name,
            'DOB'=>$request->DOB,
            'genderId'=>$request->genderId,
            'NationalityId'=>$request->NationalityId,
            'CV'=>$newPDF,
            'CoordinatorOperated'=>'0',
            'AdminOperated'=>'0',
            ]);
           if ($app) {
                return response()->json([
                    'status'=>200,
                    'message'=> 'Created Succefully'
                ], 200);
            }else{
                return response()->json([
                    'status'=>500,
                    'message'=> 'Something went Wrong'
                ], 500);
            }
        }


    }



}
