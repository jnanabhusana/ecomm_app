<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProductController;

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

Route::get('/login', function () {
    return view('login');
});
Route::view('register','register');
Route::post('login',[UserController::class,'login']);

//Route::view('product','product');
Route::get('logout', function() {
    if(session()->has('user'))
    {
        session()->pull('user',null);
    }
    return redirect('login');
});
Route::get('product',function(){
    if(session()->has('user')==null)
    {
        return redirect('login'); 
    }
    return view('product');
});