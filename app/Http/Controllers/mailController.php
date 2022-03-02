<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;
class mailController extends Controller
{
    public function sendMail(){

        $details=[

            'title'=>'this is title',
            'body'=>'this is body'
        ];
        Mail::to('b.c.d.shoo@gmail.com')->send(new TestMail($details));
       return'email sent';
    }
}
