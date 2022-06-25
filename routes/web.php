<?php

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

############################################# WEB ROUTES START #############################################
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
############################################# WEB ROUTES END #############################################



############################################# ADMIN ROUTES START #############################################
Route::group(['prefix' => 'admin'], function(){
    // admin guest routes
    Route::group(['middleware' => 'admin.guest'], function(){
        Route::view('login', 'admin.login')->name('admin.login');
        Route::post('login', [App\Http\Controllers\AdminController::class, 'login'])->name('admin.auth');
    });

    // admin auth routes
    Route::group(['middleware' => 'admin.auth'], function(){
        Route::view('dashboard', 'admin.dashboard')->name('admin.dashboard');
        Route::post('logout', [App\Http\Controllers\AdminController::class, 'logout'])->name('admin.logout');
    });
});
############################################# ADMIN ROUTES END #############################################