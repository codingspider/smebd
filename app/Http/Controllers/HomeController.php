<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    // public function __construct()
    // {
    //     $this->middleware('auth');
    // }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index(){
        $smes_and_bankers_news = DB::table('smes_and_bankers_news')->where('status', 1)->orderBy('id', 'DESC')->get();
        $fashion_news_admins = DB::table('fashion_news_admins')->orderBy('id', 'DESC')->paginate(3);
        $miscelleneous_news = DB::table('miscelleneous_news')->orderBy('id', 'DESC')->get();
        $technology_news = DB::table('technology_news')->orderBy('id', 'DESC')->simplePaginate(1);
        $tech = DB::table('technology_news')->orderBy('id', 'DESC')->simplePaginate(4);
        $technology = DB::table('technology_news')->orderBy('id', 'DESC')->first();
        $blog_requests = DB::table('sme_blogs')->orderBy('id', 'DESC')->get();
        $blogs = DB::table('sme_blogs')->orderBy('id', 'DESC')->paginate(3);
        $settings = DB::table('settings')->first();
        $services = DB::table('services')->get();

        return view('home', compact('tech','blogs','smes_and_bankers_news', 'fashion_news_admins', 'miscelleneous_news', 'technology_news', 'blog_requests', 'settings', 'services', 'technology'));
    }
}
