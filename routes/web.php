<?php

use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Models\Category;
use App\Models\Post;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('posts',[PostController::class, 'index']);
Route::get('posts/create',[PostController::class, 'create']);
Route::get('posts/{post}',[PostController::class, 'show']);


Route::get('categories',[CategoryController::class, 'index']);
Route::get('categories/{category}',[CategoryController::class, 'show']);

Route::get('users',[UserController::class, 'index']);
Route::get('users/{user}',[UserController::class, 'show']);

/*Route::get('posts/{post}', function (Post $post){

    return $post->categories;

   //return $post->load('comments');
   //load cest pour charger donc en gros nous donne le post + les commentaires
    // qd on met les parenthese apres le comments cest pour continuer la requte par exmple avec un get apres $post->comments()->get()
});*/
/*Route::get('categories/{category}', function (Category $category){

    return $category->posts;

   //return $post->load('comments');
   //load cest pour charger donc en gros nous donne le post + les commentaires
    // qd on met les parenthese apres le comments cest pour continuer la requte par exmple avec un get apres $post->comments()->get()
});*/

/*Route::get('users/{id}', function ($id){
    return \App\Models\User::find($id);
});*/
//retrouver en fonction du user
/*Route::get('/users/{user}', function (User $user){
    return $user->email;
});*/

/*Route::get('/users/{user:slug}', function (User $user){
    return $user->email;
});*/
