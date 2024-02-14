<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::prefix('/admin')->middleware(['auth','isadmin'])->group(function(){
    
    Route::get('/dashboard',function(){ return view('admin.dashboard');})->name('dashboard');
    Route::resource('/about',AboutController::class);

});

Route::get('/index', function () {
    return view('users.home');
});