<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\IndustryCategoryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TesterController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\FrontController;
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
    Route::resource('/slider',SliderController::class);
    Route::resource('/tester',TesterController::class);
    Route::resource('/feature',FeatureController::class);
    Route::resource('/faq',FaqController::class);
    Route::resource('/knowledge-base',BaseController::class);
    Route::resource('/detail',DetailController::class);
    Route::resource('/industry_category',IndustryCategoryController::class);
    Route::resource('/industry',IndustryController::class);
});

Route::prefix('/')->group(function(){
    
Route::get('/index',[FrontController::class,'index'])->name('index');

});