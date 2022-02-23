<?php

namespace App\Http\Controllers;
use Illuminate\Support\Str;
use Illuminate\Http\Request;

class FluentController extends Controller
{
    public function index(){
echo'<h1>Bushra ALqahtani</h1>';
$slice=Str::of('welcome to my account ')->after('welcome to my');
echo $slice.'<br>' ;
$slice1=Str::of('Illuminate\Http\RequestIlluminate\Http\Request')->afterLast('\\');
echo $slice1.'<br>' ;
$slice3=Str::of('besho')->append('jj');
echo $slice3.'<br>' ;
    }
}
