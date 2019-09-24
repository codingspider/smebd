<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DetailsController extends Controller
{
    public function bankers_news($id){

        $bank_news = DB::table('smes_and_bankers_news')->where('id', $id)->first();
  
        $settings = DB::table('settings')->first();
        return view('bank_news', compact('bank_news', 'settings'));
       
    }

    public function fashon_news($id){

        $fashion_news_admins = DB::table('fashion_news_admins')->where('id', $id)->first();

        $settings = DB::table('settings')->first();
  

        return view('fashion_news', compact('settings', 'fashion_news_admins'));


    }
    public function miscelleneous_news($id){

        $miscelleneous_news = DB::table('miscelleneous_news')->where('id', $id)->first();

        $settings = DB::table('settings')->first();
  

        return view('miscelleneous_news', compact('settings', 'miscelleneous_news'));


    }
    public function technology_news($id){

        $technology_news = DB::table('technology_news')->where('id', $id)->first();

        $settings = DB::table('settings')->first();
  

        return view('technology_news', compact('settings', 'technology_news'));


    }
    public function blog_news($id){

        $blog_news = DB::table('sme_blogs')->where('id', $id)->first();

        $settings = DB::table('settings')->first();
  

        return view('blog_news', compact('settings', 'blog_news'));


    }
}
