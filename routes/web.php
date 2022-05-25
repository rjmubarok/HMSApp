<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\SocialiteloginController;
use App\Http\Controllers\FloorController;
use App\Http\Controllers\Indexcontroller;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\RoomController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\userController;
use App\Models\Order;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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
// });
Route::get('/',[Indexcontroller::class,'index'])->name('/');
Route::get('/aboute',[Indexcontroller::class,'aboute'])->name('aboute');
Route::get('/contact',[Indexcontroller::class,'contact'])->name('contact');

//Auth::routes(['register'=>false]);
Auth::routes();

Route::get('/CallGitHub',[SocialiteloginController::class,'CallGitHub'])->name('CallGitHub');
Route::get('/GithubCallBack',[SocialiteloginController::class,'GithubCallBack']);
Route::get('apply-for-seat',[Indexcontroller::class,'applyeForSet'])->name('apply.for.seat');
Route::post('payment', [OrderController::class,'initiatePayment'])->name('payment');
// Route::post('payment', [Indexcontroller::class,'storeorder'])->name('payment');
Route::get('success-url', [OrderController::class,'verifyPayment']);
//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'admin/','middleware'=>'auth'], function(){
    Route::get('/', [AdminController::class,'admin'])->name('admin');
    //Slide And Notice
    Route::resource('slide-notice',SliderController::class);
    //floor
    Route::resource('floor',FloorController::class);
    //room
    Route::resource('room',RoomController::class);
    //room
    Route::resource('order',OrderController::class);
    //room
    Route::get('user',[userController::class,'index'])->name('user.index');
    Route::get('user/{id}',[userController::class,'destroy'])->name('user.destroy');
    //General Seting
    Route::get('setting', [SettingController::class,'setting'])->name('setting');
    Route::put('seting-update',[SettingController::class, 'setingUpdate'])->name('seting.update');
 });
