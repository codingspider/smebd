<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

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

        DB::table('smes_and_bankers_news')->insert($data);
  
        return back()->with('success','News has been posted sucessfully. Please wait for admin approval.');
}

}
