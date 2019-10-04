<?php

namespace App\Http\Controllers;


use DB;
use Auth;
use Session;
use App\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Input;
use App\Mail\SendMailableRegistration;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Mail\SendMailableMemberRegistration;
session_start(); 

class LoginController extends Controller
{
    public function register (Request $request ){

        dd($request);

        $users = User::where('email', $request->email)->get();
        # check if email is more than 1
        if(sizeof($users) > 0){
            return back()->with('danger', 'This email already exists in our database');
        }
        $validator = $this->validate($request, [
            'name' => 'required | string ',
            'address' => 'required | string ',
            'email' => 'required | email ',
             'username' => 'required | string ',
             'address' => 'required | string ',
             'contactno' => 'required | integer ',
             'secque' => 'required | string ',
             'secans' => 'required | string ',
         ]);

            
            $data = array();
            $data['name'] = $request->name;
            $data['email'] = $request->email;
            $data['password'] = Hash::make($request->password);
            $data['username'] = $request->username;
            $data['address'] = $request->address;
            $data['contactno'] = $request->contactno;
            $data['secque'] = $request->secque;
            $data['secans'] = $request->secans; 
            
            $users = DB::table('users')
            ->insert($data);
   
            return redirect::back()->with('message', 'You have successfully registered.');
    
    }
}
