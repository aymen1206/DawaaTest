<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Session;


class LcalizationController extends Controller
{
    /********
     * 
     * Set Language that have 
     * been selected with hr Coordinator
     * 
     * @return void
    */
        public function setLang($locale){

            App::setlocale($locale);
            Session::put("locale",$locale);
            return redirect()->back();
        }
}
