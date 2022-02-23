<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ClientController extends Controller
{
    public function getAllPost(){
        $response=Http::get('http://jsonplaceholder.typicode.com/posts');
        return  $response->json();
    }

    public function addPost(){
        $response=Http::post('http://jsonplaceholder.typicode.com/posts',[
            'userId'=>'1',
            'title'=>'new post ',
            'body'=>'description ' 
        ]);
        return  $response->json();
    }
    public function updtePost(){
        $response=Http::put('http://jsonplaceholder.typicode.com/posts/1',[
            'title'=>'new post ',
            'body'=>'description ' 
        ]);
        return  $response->json();
    }
    public function deletePost($id){
        $response=Http::delete('http://jsonplaceholder.typicode.com/posts/'.$id);
        return  $response->json();
    }
    
}
