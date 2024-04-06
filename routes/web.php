<?php

use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\BaseController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\CounterController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

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
    Route::resource('/counter',CounterController::class);
});

Route::controller(FrontController::class)->group(function(){
    
    Route::get('/','index')->name('index');
    Route::post('/contact','contact')->name('contact.store1');
    Route::get('/about','about')->name('about');
    Route::get('/feature/{id}','feature')->name('feature');
    Route::get('/contact','contact1')->name('contact');
    Route::get('/knowledge_base','knowledge_base')->name('knowledge_base');
    Route::get('/knowledge_base/{id}','knowledge_base_title')->name('knowledge_base.title');
    Route::get('/faq','faq')->name('faq');
    Route::get('/industry_category','industry_category')->name('industry_category');
    Route::get('/industry/{id}','industry')->name('industry');
    Route::get('/policy','policy')->name('policy');
    Route::get('/pricing','pricing')->name('pricing');
    Route::get('/register3','register')->name('register3');
    Route::get('/register1/{id1}/{id}','register1')->name('register1');
    Route::post('/register2','register2')->name('register.store1');
    Route::get('/tester/{id}','tester')->name('tester');
});