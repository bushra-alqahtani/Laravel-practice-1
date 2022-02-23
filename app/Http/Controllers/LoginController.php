<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function index(){
        return view('contact');
        
    }
    public function LoginSubmit(Request $request){
        $validate_data = $request->validate([
            'email'=>'required|email',
            'password'=>'required|min:8|max:20'
        ]);
        return "success!";
        
    }


}
