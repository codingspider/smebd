<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class BlogController extends Controller
{
    public function index(){
        $data = DB::table('sme_blogs')->paginate(4);
        return view ('blog_index', compact('data'));
    }

    
}
