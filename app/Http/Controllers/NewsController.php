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
            'source_url' => 'required',
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
        $data['source_url'] = $request->source_url;
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

                                $x='';
<<<<<<< HEAD
                                    if($row->approved==1 || $row->approved==2){
                                        $x.='<a href="news/unarcive/'.$row->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-remove"></i>Archived</a><a href="news/pending/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Approved</a> <a href="top/news/'.$row->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-ok"></i>Top News</a><a href="breaking/news/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Breaking </a> <a href="news/delete/'.$row->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                                    }
                                    elseif($row->approved==3 || $row->approved==2|| $row->approved==0 ){

                                        $x.=' <a href="news/unarcive/'.$row->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-remove"></i>Archived</a> <a href="news/approve/'.$row->id.'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-ok"></i> Pending </a> <a href="top/news/'.$row->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-ok"></i>Top News</a><a href="breaking/news/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Breaking </a> <a href="news/delete/'.$row->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                                    }elseif($row->approved==1 || $row->approved==4 ){

                                        $x.='  <a href="news/arcive/'.$row->id.'" class="btn btn-xs btn-secondary"><i class="glyphicon glyphicon-remove"></i>Unarchived</a><a href="news/approve/'.$row->id.'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-ok"></i> Pending </a> <a href="top/news/'.$row->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-ok"></i>Top News</a><a href="breaking/news/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Breaking </a> <a href="news/delete/'.$row->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';

                                    }
=======
                                    if($row->approved==1){
                                        $x.='  <a href="news/pending/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Approved</a> <a href="top/news/'.$row->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-ok"></i>Top News</a><a href="breaking/news/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Breaking </a> <a href="news/delete/'.$row->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                                    }

                                    if($row->approved==3){
                                        $x.='  <a href="news/approve/'.$row->id.'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-ok"></i> Pending </a> <a href="top/news/'.$row->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-ok"></i>Top News</a><a href="breaking/news/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Breaking </a> <a href="news/delete/'.$row->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                                    }


                                    if ($row->approved==2) {
                                        $x.='  <a href="news/unarcive/'.$row->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-remove"></i>Archived</a> <a href="top/news/'.$row->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-ok"></i>Top News</a><a href="breaking/news/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Breaking </a> <a href="news/delete/'.$row->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                                    }
                                    if ($row->approved==4) {
                                        $x.='  <a href="news/arcive/'.$row->id.'" class="btn btn-xs btn-secondary"><i class="glyphicon glyphicon-remove"></i>Unarchived</a> <a href="top/news/'.$row->id.'" class="btn btn-xs btn-info"><i class="glyphicon glyphicon-ok"></i>Top News</a><a href="breaking/news/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Breaking </a> <a href="news/delete/'.$row->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                                    }




>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
                                     return '  '.$x.'';
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
                return back()->with('success', 'News Approved Succesfully! ');
<<<<<<< HEAD

            }
             public function news_pending_done($id){
                $data = DB::table('sme_blogs')

=======
              
            }
             public function news_pending_done($id){
                $data = DB::table('sme_blogs')
                
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
                ->where('id', $id)->update([
                    'status' => 'Pending',
                    'approved' => 3,
                ]);
                return back()->with('success', 'News Pending Succesfully! ');
<<<<<<< HEAD

=======
              
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
            }
            public function news_top($id){
                $data = DB::table('sme_blogs')

                ->where('id', $id)->update([

                    'top' => 1,
                ]);
                return back()->with('success', 'News Has been set to Top Stories Succesfully! ');
            }
            public function news_breaking ($id){
                $data = DB::table('sme_blogs')

                ->where('id', $id)->update([

                    'breaking' => 1,
                ]);
                return back()->with('success', 'News Has been set to breaking Succesfully! ');

            }
            public function news_archive_done ($id){
                $data = DB::table('sme_blogs')
                ->where('id', $id)->update([
                    'status' => 'Archived',
                    'approved' => 2,
                ]);
                return back()->with('success', 'News Archived Succesfully! ');

            }

            public function news_unarcive_done ($id){
                $data = DB::table('sme_blogs')
                ->where('id', $id)->update([
                    'status' => 'UnArchived',
                    'approved' => 4,
                ]);
                return back()->with('success', 'News UnArchived Succesfully! ');

            }

            public function news_unarcive_done ($id){
                $data = DB::table('sme_blogs')
                ->where('id', $id)->update([
                    'status' => 'UnArchived',
                    'approved' => 4,
                ]);
                return back()->with('success', 'News UnArchived Succesfully! ');
              
            }
            public function news_delete ($id){
                $data = DB::table('sme_blogs')
                ->where('id', $id)->delete();

                return back()->with('success', 'News Deleted Succesfully! ');

            }
            public function news_archive (){

                $smes_and_bankers_news = DB::table('sme_blogs')->where('approved', 2)->where('cat_id', 3)->orderBy('id', 'DESC')->get();
                $fashion_news_admins = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 2)->where('cat_id', 2)->get();
                $miscelleneous_news = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 2)->where('cat_id', 5)->get();
                $technology_news = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 2)->where('cat_id', 1)->get();
                $blogs = DB::table('sme_blogs')->orderBy('id', 'DESC')->where('approved', 1)->where('cat_id', 4)->get();
                $settings = DB::table('settings')->first();
                $services = DB::table('services')->get();
                $top = DB::table('sme_blogs')->where('approved', 2)->where('top', 1)->get();
                $breaking = DB::table('sme_blogs')->where('approved', 2)->where('breaking', 1)->get();

        return view('news_archive', compact('top','blogs','smes_and_bankers_news', 'fashion_news_admins', 'miscelleneous_news', 'technology_news', 'breaking', 'settings', 'services', 'technology'));

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
        public function blog_post ()
        {
        $blogs = DB::table('sme_blogs')->where('cat_id', 4)->get();
        return view('blog_post', compact('blogs'));

        }

        public function new_news (Request $request)
        {
<<<<<<< HEAD

        if ($request->ajax()) {
                    $data = DB::table('sme_blogs')

=======
        
        if ($request->ajax()) {
                    $data = DB::table('sme_blogs')
                    
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
                    ->get();

                    return Datatables::of($data)
                            ->addIndexColumn()
                            ->addColumn('action', function($row){
                                return '<a href="edit/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-pencil"></i> Edit </a><a href="delete/'.$row->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i>Delete</a>';
                            })
                            ->rawColumns(['action'])
                            ->make(true);
                }
        return view('new_news');

        }

        public function new_news_edit ($id){

            $news = DB::table('sme_blogs')->where('id', $id)->first();

<<<<<<< HEAD
            return view('custom_edit_view', compact('news'));
=======
            return view('custom_edit_view', compact('news')); 
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
        }

        public function new_news_delete ($id){

            $news = DB::table('sme_blogs')->where('id', $id)->delete();

           return back ()->with('success','News Deleted sucessfully');
        }

        public function new_news_update (Request $request){

<<<<<<< HEAD
            $id = $request->id;
=======
            $id = $request->id; 
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
           if ($request->hasFile('image_name')) {
            $image = $request->file('image_name');
            $name = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/uploads');
            $image->move($destinationPath, $name);
<<<<<<< HEAD

        }


=======
            
        }
        
        
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
        DB::table('sme_blogs')->where('id', $id)->update([
            'headline' => $request->headline,
            'short_description' => $request->short_description,
            'detail' => $request->detail,
            'news_source' => $request->news_source,
<<<<<<< HEAD
            'source_url' => $request->source_url,
=======
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
            'news_provider' => $request->news_provider,
            'cat_id' => $request->category_id,
            'image_name' => $name,
        ]);
<<<<<<< HEAD

=======
       
>>>>>>> 32e955ddfc6b66817ecf47a594aab6f9b022b311
        return back ()->with('success','News Updated sucessfully');
        }

}
