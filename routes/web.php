<?php

use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\HomeController;
use Illuminate\Support\Facades\Auth;
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

//Route::get('/', function () {
//    return view('welcome');
//});
Route::get('/home', [HomeController::class,'index'])->name('home');

Route::get('/',[HomeController::class,'index']);

//---user--
Route::group(['prefix' => 'user'],function(){

});
//--admin--
Route::group(['prefix' => 'admin'],function(){
     Route::resource('/home',\App\Http\Controllers\Admin\HomeController::class);
//    --Post--
    Route::resource('/post', PostController::class);
//    ---Category--
    Route::resource('/category', CategoryController::class);
//    ---Tag---
    Route::resource('/tag',TagController::class);
//    ---Admin-User--routes--
    Route::resource('/user',UserController::class);
//    ---Admin-User--Roles--routes--
    Route::resource('/role',RoleController::class);
//    ---Admin-User--Permission--routes--
    Route::resource('/permission',PermissionController::class);
});

//Route::resource('/',User\HomeController::class);

//Route::group(['middleware'=>'auth'],function(){
//    Route::post('/','User\LikeController@likes')->name('likes');
//    Route::post('/tt','User\DislikeController@dislike')->name('dislike');
//
//});
//
////
//Route::group(['prefix' => 'user'],function(){
//    Route::resource('/posted',User\UserPostController::class);
//    Route::get('/category',[ContentController::class,'category'])->name('category');
//    Route::get('/tag',[ContentController::class,'tag'])->name('tag');
//});
//
////    Route::resource('/post',[PostController::class]);
//
////    ---Admin Auth--
//Route::get('admin-login', [LoginController::class,'showLoginForm']);
//
//Route::post('admin-login', [LoginController::class,'login'])->name('admin.login');
//
////---Admin---
//
//Route::group(['prefix' => 'admin','middleware'=>'auth:admin'],function(){
//
////    ---Admin-User--routes--
//    Route::resource('/user',Admin\UserController::class);
//
//    //    ---Admin-User--Roles--routes--
//    Route::resource('/role',Admin\RoleController::class);
//
//    //    ---Admin-User--Roles--routes--
//    Route::resource('/permission',Admin\PermissionController::class);
//
//    //    ---Home--routes--
//    Route::resource('/home',Admin\HomeController::class);
//
////    --Post--
//    Route::resource('/post',Admin\PostController::class);
//
////    ---Tag---
//    Route::resource('/tag',Admin\TagController::class);
//
////    ---Category--
//    Route::resource('/category',Admin\CategoryController::class);
//});
Auth::routes();
