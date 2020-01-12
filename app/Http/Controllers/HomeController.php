<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Menu;
<<<<<<< HEAD
use Carbon\Carbon;
use Auth;

=======
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311

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
        
        $breaking = DB::table('sme_blogs')->where('approved', 1)->where('breaking', 1)->orderBy('id', 'desc')->paginate(5);
        
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
        
        $Menu =new Menu;

<<<<<<< HEAD
        $categories=$Menu->tree();

        return view('home', compact('top','blogs','smes_and_bankers_news', 'fashion_news_admins', 'miscelleneous_news', 'technology_news', 'breaking', 'settings', 'services', 'technology','categories','archive'));
        }

        public function catagory(Request $request){
        //dd($request->id);
        //$smes_and_bankers_news = DB::table('sme_blogs')->where('approved', 1)->where('cat_id', $request->id)->orderBy('id', 'DESC')->get();
        
        $services = DB::table('services')->get();
        $menus = DB::table('menus')->where('id', $request->id)->first();
        $menu_title=$menus->title;
        $is_catagory=$menus->is_catagory;
        $url=$menus->url;
        
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
        
        if ($url=='/news_node')
            {
                $smes_and_bankers_news = DB::table('sme_blogs')->where('approved', 1)->where('cat_id', $request->id)->orderBy('id', 'DESC')->get();
                return view('catagoryDetails', compact('smes_and_bankers_news','services','menu_title', 'archive '));}
        else 
            {
                $smes_and_bankers_news = DB::table('sme_blogs')->where('cat_id', $request->id)->where('approved', 1)->orderBy('id', 'DESC')->first();
                //dd($smes_and_bankers_news);
                return view('noncatagory', compact('smes_and_bankers_news','services','menu_title', 'archive '));} 
=======
        $categories = Menu::with('children')->where('parent_id','=',0)->get();

        return view('home', compact('top','blogs','smes_and_bankers_news', 'fashion_news_admins', 'miscelleneous_news', 'technology_news', 'breaking', 'settings', 'services', 'technology','categories'));
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
    }
    
    
    
    
    public function tours_travels(){
        $settings = DB::table('settings')->first();
        $services = DB::table('services')->get();

        $Menu =new Menu;

        $categories=$Menu->tree();

        return view('tours_travels', compact('settings', 'services'));
            
    }
    
     public function search (Request $request){
         $variable =$request->search; 
         
         $data = DB::table('sme_blogs')
        ->where('headline', 'like', '%'.$variable.'%')
        ->orWhere('short_description', 'like', '%'.$variable.'%')
        ->orWhere('detail', 'like', '%'.$variable.'%')
        ->orWhere('news_source', 'like', '%'.$variable.'%')
        ->get();
        $services = DB::table('services')->get();
        
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
        
        return view('search', compact('data', 'services','archive') );
     }
     
     public function post_by($news_provider){
          $data = DB::table('sme_blogs')->where('news_provider', $news_provider)->get(); 
          
          return view('post_by_admin', compact('data') );
     }
     
}
