<?php

namespace App\Http\Controllers;

use App\Models\about;
use App\Models\achieve;
use App\Models\banner;
use App\Models\blog;
use App\Models\client;
use App\Models\customerSay;
use App\Models\gallery;
use App\Models\service;
use App\Models\setting;
use App\Models\team;
use App\Models\blogComment;
use App\Models\media;
use App\Models\privacyPolicy;
use App\Models\product;
use App\Models\video;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    //home
    function home(){
        $abouts = about::where('status', 1)->where('define', 1)->get();
        $banners = banner::where('status', 1)->get();
        $products = product::where('status', 1)->where('define', 2)->get();
        $services = service::where('status', 1)->get();
        $teams = team::where('status', 1)->get();
        $gallerys = gallery::where('status', 1)->get();
        $clients = client::where('status', 1)->get();
        $achieves = achieve::where('status', 1)->get();
        $customerSays = customerSay::where('status', 1)->get();
        $videos = video::where('status', 1)->get();
        $blogs = blog::where('status', 1)->where('define', 2)->get();
        $settings = setting::all();
        return view('frontend.home',[
            'abouts'=>$abouts,
            'banners'=>$banners,
            'services'=>$services,
            'teams'=>$teams,
            'settings'=>$settings,
            'gallerys'=>$gallerys,
            'clients'=>$clients,
            'achieves'=>$achieves,
            'customerSays'=>$customerSays,
            'blogs'=>$blogs,
            'products'=>$products,
            'videos'=>$videos,
        ]);
    }

    //about_us
    function about_us(){
        $abouts = about::where('status', 1)->where('define', 2)->get();
        $products = product::where('status', 1)->get();
        $clients = client::where('status', 1)->get();
        $teams = team::where('status', 1)->get();
        return view('frontend.about', [
            'abouts'=>$abouts,
            'products'=>$products,
            'clients'=>$clients,
            'teams'=>$teams,
        ]);
    }
    //services
    function services(){
        $services = service::where('status', 1)->get();
        return view('frontend.services', [
            'services'=>$services,
        ]);
    }
    //our_portfolio
    function our_portfolio(){
        return view('frontend.protfolio');
    } 
    //our_blog
    function our_blog(){
        $blogs = blog::where('status', 1)->get();
        return view('frontend.blog',[
            'blogs'=>$blogs,
        ]);
    }
    //our_blog_details
    function our_blog_details($slug){
        $latest_blogs = blog::where('status', 1)->get();
        $blogs = blog::where('slug', $slug)->get();
        $blog_comment = blogComment::where('blogs_id', $blogs->first()->id)->get();
        $blog_comment_count = blogComment::where('blogs_id', $blogs->first()->id)->count();
        $blog_comment_all = blogComment::all();
        return view('frontend.blog_details',[
            'blogs'=>$blogs,
            'latest_blogs'=>$latest_blogs,
            'blog_comment'=>$blog_comment,
            'blog_comment_count'=>$blog_comment_count,
            'blog_comment_all'=>$blog_comment_all,
        ]);
    }
    //contect
    function contect(){
        $settings = setting::all();
        return view('frontend.contect', [
            'settings'=>$settings,
        ]);
    }
    //gallerys
    function gallerys(){
        $gallerys = gallery::where('status', 1)->get();
        return view('frontend.gallery', [
            'gallerys'=>$gallerys,
        ]);
    }
    //our_team
    function our_team(){
        $teams = team::where('status', 1)->get();
        return view('frontend.team', [
            'teams'=>$teams,
        ]);
    } 
    //our_team
    function our_clients(){
        $clients = client::where('status', 1)->get();
        $customerSays = customerSay::where('status', 1)->get();
        return view('frontend.client', [
            'clients'=>$clients,
            'customerSays'=>$customerSays,
        ]);
    }
    
    //our_team
    function our_privacy_policy(){
        $privacyPolicy = privacyPolicy::all();
        return view('frontend.privacyPolicy', [
            'privacyPolicy'=>$privacyPolicy,
        ]);
    }
    //our_product
    function our_product(){
        $products = product::where('status', 1)->get();
        return view('frontend.product', [
            'products'=>$products,
        ]);
    }
     //our_media
    function our_media(){
        $medias = media::where('status', 1)->get();
        return view('frontend.media', [
            'medias'=>$medias,
        ]);
    }

    // register_dealerform
    function register_dealerform(){
        return view('frontend.dealerform');
    }

}
