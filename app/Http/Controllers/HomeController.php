<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Menu;

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
        $smes_and_bankers_news = DB::table('sme_blogs')->where('approved', 1)->where('cat_id', 3)->orderBy('id', 'DESC')->get();
        $fashion_news_admins = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 1)->where('cat_id', 2)->get();
        $miscelleneous_news = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 1)->where('cat_id', 5)->get();
        $technology_news = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 1)->where('cat_id', 1)->get();
        $blogs = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 1)->where('cat_id', 4)->get();
        $settings = DB::table('settings')->first();
        $services = DB::table('services')->get();
        $top = DB::table('sme_blogs')->where('approved', 1)->where('top', 1)->get();
        $breaking = DB::table('sme_blogs')->where('approved', 1)->where('breaking', 1)->get();

        $categories = Menu::with('children')->where('parent_id','=',0)->get();

        return view('home', compact('top','blogs','smes_and_bankers_news', 'fashion_news_admins', 'miscelleneous_news', 'technology_news', 'breaking', 'settings', 'services', 'technology','categories'));
    }
}
