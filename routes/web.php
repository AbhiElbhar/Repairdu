<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DetailController;
use App\Http\Controllers\Admin\FaqController;
use App\Http\Controllers\Admin\FeatureController;
use App\Http\Controllers\Admin\IndustryCategoryController;
use App\Http\Controllers\Admin\SliderController;
use App\Http\Controllers\Admin\TesterController;
use App\Http\Controllers\Admin\IndustryController;
use App\Http\Controllers\Admin\KnowledgeBaseController;
use App\Http\Controllers\Admin\PolicyController;
use App\Http\Controllers\Admin\PricingController;
use App\Http\Controllers\Admin\RegisterController;
use App\Http\Controllers\Admin\SocialMediaController;
use App\Http\Controllers\Admin\TimeController;
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
    Route::resource('/knowledge_base',KnowledgeBaseController::class);
    Route::resource('/detail',DetailController::class);
    Route::resource('/industry_category',IndustryCategoryController::class);
    Route::resource('/industry',IndustryController::class);
    Route::resource('/contact',ContactController::class);
    Route::resource('/social_media',SocialMediaController::class);
    Route::resource('/policy',PolicyController::class);
    Route::resource('/time',TimeController::class);
    Route::resource('/pricing',PricingController::class);
    Route::resource('/register',RegisterController::class);
});

Route::prefix('/')->group(function(){
    
    Route::get('/index',[FrontController::class,'index'])->name('index');
    Route::post('/contact',[FrontController::class,'contact'])->name('contact.store1');
    Route::get('/about',[FrontController::class,'about'])->name('about');
    Route::get('/feature/{id}',[FrontController::class,'feature'])->name('feature');
    Route::get('/contact',[FrontController::class,'contact1'])->name('contact');
    Route::get('/knowledge_base',[FrontController::class,'knowledge_base'])->name('knowledge_base');
    Route::get('/knowledge_base/{id}',[FrontController::class,'knowledge_base_title'])->name('knowledge_base.title');
    Route::get('/faq',[FrontController::class,'faq'])->name('faq');
    Route::get('/industry_category',[FrontController::class,'industry_category'])->name('industry_category');
    Route::get('/industry/{id}',[FrontController::class,'industry'])->name('industry');
    Route::get('/policy',[FrontController::class,'policy'])->name('policy');
    Route::get('/pricing',[FrontController::class,'pricing'])->name('pricing');
    Route::get('/register',[FrontController::class,'register'])->name('register');
    Route::get('/register1/{id1}/{id}',[FrontController::class,'register1'])->name('register1');
    Route::post('/register2',[FrontController::class,'register2'])->name('register.store1');
    Route::get('/tester/{id}',[FrontController::class,'tester'])->name('tester');
});