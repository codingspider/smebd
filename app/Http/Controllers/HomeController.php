<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    public function index(){
        $smes_and_bankers_news = DB::table('smes_and_bankers_news')->get();
        $fashion_news_admins = DB::table('fashion_news_admins')->paginate(3);
        $miscelleneous_news = DB::table('miscelleneous_news')->get();
        $technology_news = DB::table('technology_news')->simplePaginate(1);
        $tech = DB::table('technology_news')->simplePaginate(4);
        $technology = DB::table('technology_news')->first();
        $blog_requests = DB::table('sme_blogs')->get();
        $blogs = DB::table('sme_blogs')->paginate(3);
        $settings = DB::table('settings')->first();
        $services = DB::table('services')->get();

        return view('home', compact('tech','blogs','smes_and_bankers_news', 'fashion_news_admins', 'miscelleneous_news', 'technology_news', 'blog_requests', 'settings', 'services', 'technology'));
    }
}
