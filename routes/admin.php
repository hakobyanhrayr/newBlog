<?php
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use Illuminate\Support\Facades\Route;


Route::group(['prefix' => 'admin'],function(){

    Route::get('login', 'App\Http\Controllers\Admin\LoginController@showLoginForm')->name('admin.login');
    Route::post('login', 'App\Http\Controllers\Admin\LoginController@login')->name('admin.login.post');
    Route::get('logout', 'App\Http\Controllers\Admin\LoginController@logout')->name('admin.logout');

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
