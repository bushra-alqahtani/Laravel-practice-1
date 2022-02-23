<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(){
    $items=array('books','pens','papera');
    return view('welcome', compact('items'));

    }
}
