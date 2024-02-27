<?php

namespace App\Http\Controllers;

use App\Models\About;
use App\Models\contact;
use App\Models\counter;
use App\Models\detail;
use App\Models\faq;
use App\Models\Feature;
use App\Models\industry_category;
use App\Models\knowledge_base;
use App\Models\policy;
use App\Models\register;
use App\Models\Slider;
use App\Models\social_media;
use App\Models\Tester;
use App\Models\time;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FrontController extends Controller
{
    public function index(){
        
        $details = detail::get();
        $slider = Slider::get();
        $about = About::get();
        $feature = Feature::get();
        $tester = Tester::get();
        $social_media = social_media::get();
        $knowledge_base = knowledge_base::get();
        $counter = counter::get();

        return view('users.home',compact(['details','slider','about','feature','tester','knowledge_base','social_media','counter']));
    }

    public function contact(Request $request){
        $request->validate([
            'name'=>'required|max:255',
            'description'=>'required',
            'email'=>'required|max:255',
            'subject'=>'required|max:255'
        ]);

        contact::create([
            'name'=>$request->name,
            'description'=>$request->description,
            'email'=>$request->email,
            'subject'=>$request->subject
        ]);

        return back();
    }

    public function about(){
        $details = detail::get();
        $about = About::get();
        $feature = Feature::get();
        $tester = Tester::get();
        $social_media = social_media::get();
        $knowledge_base = knowledge_base::get();

        return view('users.about',compact(['details','about','feature','tester','knowledge_base','social_media']));
    }

    public function feature($id){
        $id1 = trim($id,"%20");

        $details = detail::get();
        $feature = Feature::get();
        $about = About::get();
        $social_media = social_media::get();
        $knowledge_base = knowledge_base::get();

        $feature1 = DB::table('features')->where('title','=',$id1)->get();

        return view('users.feature',compact(['feature','details','feature1','about','knowledge_base','social_media']));
    }

    public function contact1(){

        $details = detail::get();
        $feature = Feature::get();
        $about = About::get();
        $social_media = social_media::get();
        $knowledge_base = knowledge_base::get();

        return view('users.contact',compact(['feature','details','about','knowledge_base','social_media']));

    }

    public function knowledge_base(){
        $details = detail::get();
        $feature = Feature::get();
        $about = About::get();
        $social_media = social_media::get();
        $knowledge_base = knowledge_base::get();

        return view('users.knowledge_base',compact(['feature','details','about','knowledge_base','social_media']));
    }

    public function knowledge_base_title($id){
        $details = detail::get();
        $feature = Feature::get();
        $about = About::get();
        $social_media = social_media::get();
        $knowledge_base = knowledge_base::get();

        $id1 = trim($id,"%20");
        $knowledge_base_title = DB::table('knowledge_bases')->where('title','=',$id1)->get();

        return view('users.knowledge_base_title',compact(['feature','details','about','knowledge_base','knowledge_base_title','social_media']));
    }

    public function faq(){
        $details = detail::get();
        $feature = Feature::get();
        $about = About::get();
        $social_media = social_media::get();
        $knowledge_base = knowledge_base::get();
        $faq = faq::get();

        return view('users.faq',compact(['feature','details','about','knowledge_base','faq','social_media']));
    }

    public function industry_category(){
        $details = detail::get();
        $feature = Feature::get();
        $knowledge_base = knowledge_base::get();
        $about = About::get();
        $social_media = social_media::get();
        $industry_category = industry_category::with('industry')->get();

        return view('users.industry_category',compact(['feature','details','knowledge_base','about','industry_category','social_media']));
    }

    public function industry($id){
        $details = detail::get();
        $feature = Feature::get();
        $knowledge_base = knowledge_base::get();
        $about = About::get();
        $social_media = social_media::get();
        $industry_category = industry_category::with('industry')->get();
        $id1 = trim($id,"%20");
        $industry = industry_category::with('industry')->where('name','=',$id1)->get();

        return view('users.industry',compact(['feature','details','knowledge_base','about','industry','industry_category','social_media']));
    }

    public function policy(){

        $details = detail::get();
        $feature = Feature::get();
        $knowledge_base = knowledge_base::get();
        $about = About::get();
        $social_media = social_media::get();
        $policy = policy::get();

        return view('users.policy',compact(['feature','details','knowledge_base','about','social_media','policy']));
    }

    public function pricing(){

        $details = detail::get();
        $feature = Feature::get();
        $knowledge_base = knowledge_base::get();
        $about = About::get();
        $social_media = social_media::get();
        $pricing = time::with('pricing')->get();

        return view('users.pricing',compact(['feature','details','knowledge_base','about','social_media','pricing']));
    }


    public function register(){
        $details = detail::get();
        $feature = Feature::get();
        $knowledge_base = knowledge_base::get();
        $about = About::get();
        $social_media = social_media::get();
        $pricing = time::with('pricing')->get();

        return view('users.register',compact(['feature','details','knowledge_base','about','social_media','pricing']));
    }

    public function register2(Request $request){

        $request->validate([
            'name'=>'required|max:255',
            'mobile_no'=>'required|digits:10',
            'email'=>'required|max:255',
            'package'=>'required|max:255',
            'package_type'=>'required|max:255',
            'password'=>'required|max:255',
            'c_password'=>'required|max:255'
        ]);

        register::create([
            'name'=>$request->name,
            'mobile_no'=>$request->mobile_no,
            'email'=>$request->email,
            'package'=>$request->package,
            'package_type'=>$request->package_type,
            'password'=>$request->password,
            'c_password'=>$request->c_password
        ]);

        return back();
    }

    public function register1($id1, $id){
        $details = detail::get();
        $feature = Feature::get();
        $knowledge_base = knowledge_base::get();
        $about = About::get();
        $social_media = social_media::get();
        $pricing = time::with('pricing')->get();

        return view('users.register',compact(['feature','details','knowledge_base','about','social_media','pricing','id','id1']));
    }

    public function tester($id){
        $details = detail::get();
        $feature = Feature::get();;
        $about = About::get();
        $social_media = social_media::get();
        $id1 = trim($id,'%20');
        $tester = DB::table('testers')->where('name','=',$id1)->get();

        return view('users.tester',compact(['feature','details','about','social_media','tester']));
    }

}
