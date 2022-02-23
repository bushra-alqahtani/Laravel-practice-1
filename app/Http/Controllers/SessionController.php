<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function getSessionData(Request $request){
        if($request->session()->has('name')){
            echo $request->session()->get('name');

        }else{
            echo"i could not fined any datd in this session";
        }
        
    }

    public function addSessionData(Request $request){
        $request->session()->put('name','Bushra');
            echo 'the session data was added ';
    
    }
    public function removeSessionData(Request $request){
        $request->session()->forget('name');
            echo 'the session data was removed ';
        
    }



}
