<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Carbon\Carbon;

class DetailsController extends Controller
{
    public function bankers_news($id){

        $bank_news = DB::table('sme_blogs')->where('id', $id)->first();
        
         $archive = DB::table('sme_blogs')->orderBy('updated_at', 'desc')
        ->whereNotNull('updated_at')
        ->where('approved', 2)
        ->get()
        ->groupBy(function($archive) {
            return Carbon::parse($archive->updated_at)->format('Y');
        })
        ->map(function ($item) {
            return $item
                ->sortByDesc('updated_at')
                ->groupBy( function ( $item ) {
                    return Carbon::parse($item->updated_at)->format('F');
                });
        });
  
        return view('bank_news', compact('bank_news', 'archive'));
       
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
    public function top_stories ($id){

        $top_stories = DB::table('sme_blogs')->where('id', $id)->first();
        return view('top_stories', compact( 'top_stories'));
    }
    public function breaking_news ($id){

        $breaking_news = DB::table('sme_blogs')->where('id', $id)->first();
        return view('breaking_news', compact( 'breaking_news'));
    }
}
