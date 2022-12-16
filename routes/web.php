<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\User\ContentController;
use App\Http\Controllers\User\HomeController;
use App\Http\Controllers\User\UserPostController;
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

//Route::get('admin-login', [LoginController::class,'showLoginForm']);
//
//Route::post('admin-login', [LoginController::class,'login'])->name('admin.login');

//---user--
Route::group(['prefix' => 'user'],function(){
   Route::resource('/posted',UserPostController::class);
    Route::get('/category',[ContentController::class,'category'])->name('category');
    Route::get('/tag',[ContentController::class,'tag'])->name('tag');
});

//--admin--
require  'admin.php';

;
Auth::routes();

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
