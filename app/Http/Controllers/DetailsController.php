<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class DetailsController extends Controller
{
    public function bankers_news($id){

        $bank_news = DB::table('sme_blogs')->where('id', $id)->first();
  
       

        return view('bank_news', compact('bank_news'));
       
    }

    public function fashon_news($id){

        $fashion_news_admins = DB::table('sme_blogs')->where('id', $id)->first();

     
  

        return view('fashion_news', compact( 'fashion_news_admins'));


    }
    public function miscelleneous_news($id){

        $miscelleneous_news = DB::table('sme_blogs')->where('id', $id)->first();



        return view('miscelleneous_news', compact( 'miscelleneous_news'));


    }
    public function technology_news($id){

        $technology_news = DB::table('sme_blogs')->where('id', $id)->first();


  

        return view('technology_news', compact( 'technology_news'));


    }
    public function blog_news($id){

        $blog_news = DB::table('sme_blogs')->where('id', $id)->first();



        return view('blog_news', compact( 'blog_news'));


    }
}
