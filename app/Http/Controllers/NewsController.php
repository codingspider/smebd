<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use DataTables;
use App\TestModel;
class NewsController extends Controller

{ 
    
    public function news (){
        
    return view ('post_news');
}
    public function news_submit (Request $request){

        $validator = $this->validate($request, [
            'headline' => 'required | string ',
            'short_description' => 'required ',
            'detail' => 'required',
            'news_provider' => 'required',
            'news_source' => 'required',
            'image_name' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',

        ]);
        
        if ($request->hasFile('image_name')) {
            $image = $request->file('image_name');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
            
        }

        $data = array();
        $data['client_id'] = $request->client_id;
        $data['headline'] = $request->headline;
        $data['short_description'] = $request->short_description;
        $data['news_provider'] = $request->news_provider;
        $data['news_source'] = $request->news_source;
        $data['detail'] = $request->detail;
        $data['image_name'] = $name;
        $data['cat_id'] = $request->category_id;

        DB::table('sme_blogs')->insert($data);
  
        return back()->with('success','News has been posted sucessfully. Please wait for admin approval.');
}

        public function news_approve(Request $request)
            {
                if ($request->ajax()) {
                    $data = DB::table('sme_blogs')
                    
                    ->get();

                    return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){
                                return '<a href="news/approve/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Approve</a> <a href="news/arcive/'.$row->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-remove"></i>Archive</a> <a href="news/delete/'.$row->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                            })
                            ->rawColumns(['action'])
                            ->make(true);
                }
            
                return view('news_approve');
            }

            public function news_approve_done($id){
                $data = DB::table('sme_blogs')
                
                ->where('id', $id)->update([
                    'status' => 'Approved',
                    'approved' => 1,
                ]);
                return back()->with('success', 'News Published Succesfully! ');
              
            }
            public function news_archive_done ($id){
                $data = DB::table('sme_blogs')
                ->where('id', $id)->update([
                    'status' => 'Archived',
                    'approved' => 2,
                ]);
                return back()->with('success', 'News Archived Succesfully! ');
              
            }
            public function news_delete ($id){
                $data = DB::table('sme_blogs')
                ->where('id', $id)->delete();

                return back()->with('success', 'News Deleted Succesfully! ');
              
            }
            public function news_archive (){

        $smes_and_bankers_news = DB::table('sme_blogs')->where('approved', 2)->where('cat_id', 3)->orderBy('id', 'DESC')->get();
        $fashion_news_admins = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 2)->where('cat_id', 2)->paginate(3);
        $miscelleneous_news = DB::table('sme_blogs')->orderBy('id', 'DESC')->get();
        $technology_news = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 2)->where('cat_id', 1)->simplePaginate(1);
        $tech = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 2)->where('cat_id', 1)->simplePaginate(4);
        $technology = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 2)->where('cat_id', 1)->first();
        $blog_requests = DB::table('sme_blogs')->orderBy('id', 'DESC')->get()->where('approved', 2)->where('cat_id', 4);
        $blogs = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 2)->where('cat_id', 4)->paginate(3);
        $settings = DB::table('settings')->first();
        $services = DB::table('services')->get();

        return view('news_archive', compact('tech','blogs','smes_and_bankers_news', 'fashion_news_admins', 'miscelleneous_news', 'technology_news', 'blog_requests', 'settings', 'services', 'technology'));
              
            }

            public function store (Request $request)
            {


                $request->validate([
                    'subscribe' => 'required',
                   
                ]);
                
                $data = array();
                $data['sumbscribe'] = $request->subscribe;

                $customer_id = DB::table('test_models')->insert($data);
        
        return back()->with('success','Thanks for subscribing to our newsletter.');

                }
            public function contact_create (Request $request)
            {


        return view('contact');

                }
}
