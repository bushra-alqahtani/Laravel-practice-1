<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\FluentController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\postsController;
use App\Http\Controllers\PaginationController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\mailController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// })->name("welcome");
Route::get('/contact',[App\Http\Controllers\ContactController::class,'index'])->name("contact.index");


Route::get('/home/{name}',[HomeController::class,'index' ])->name('home.index');
Route::get('/',[ProductController::class,'index'])->name('product.index');
Route::get('/posts',[ClientController::class,'getAllPost'])->name('product.getAllPost');
Route::get('/addposts',[ClientController::class,'addPost'])->name('product.addPost');
Route::get('/updtePosts',[ClientController::class,'updtePost'])->name('product.updtePost');
Route::get('/deletePosts/{id}',[ClientController::class,'deletePost'])->name('product.deletePost');
Route::get('/fluent',[FluentController::class,'index'])->name('fluent.index');
Route::get('/login',[LoginController::class,'index'])->name('login.index');
Route::post('/login',[LoginController::class,'LoginSubmit'])->name('login.LoginSubmit');
Route::get('session/get',[SessionController::class,'getSessionData'])->name('session.get');
Route::get('session/put',[SessionController::class,'addSessionData'])->name('session.put');
Route::get('session/forget',[SessionController::class,'removeSessionData'])->name('session.forget');
Route::get('getAllPost',[postsController::class,'getAllPost'])->name('get.posts');
Route::get('add-post',[postsController::class,'addPost'])->name('add.posts');
Route::post('add-post-sub',[postsController::class,'addPostSubmite'])->name('add.postsub');
Route::get('get-postid/{id}',[postsController::class,'getPostById'])->name('getposts.id');
Route::get('remove-post/{id}',[postsController::class,'removePost'])->name('remove.post');
Route::get('edit-post/{id}',[postsController::class,'editPost'])->name('edit.post');
Route::post('update-post',[postsController::class,'updatePost'])->name('update.post');
Route::get('inner',[postsController::class,'innerJoinClasses'])->name('inner.post');
Route::get('right',[postsController::class,'rightJoinClasses'])->name('right.post');
Route::get('left',[postsController::class,'leftJoinClasses'])->name('left.post');
Route::get('getModel',[postsController::class,'getAllPostsModel'])->name('get.model');
Route::get('allUsers',[PaginationController::class,'allUsers'])->name('all.users');
Route::get('/upload',[UploadController::class,'uploadForm'])->name('upload.form');
Route::post('/upload',[UploadController::class,'uploadFile'])->name('upload.file');
Route::get('/testMail',[mailController::class,'sendMail']);

