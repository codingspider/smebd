<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use DataTables;
use App\User;
class LoanController extends Controller
{

    public function form(){

        return view ('application_form');
    }
    public function create (Request $request){

        $validator = $this->validate($request, [
             'loan_type' => 'required | string ',
             'business_name' => 'required | string ',
             'business_address' => 'required | string ',
             'type_of_business' => 'required | string ',
             'business_experience' => 'required | string ',
             'monthly_sales' => 'required | string ',
             'repayment_type' => 'required | string ',
             'price_of_sold_goods' => 'required | string ',
             'other_expenses' => 'required | string ',
             'trade_license_no' => 'required | string ',
             'national_id_no' => 'required | string ', 
             'district' => 'required | string ',
             'loan_amount' => 'required | string ',
             'period_of_loan' => 'required | string ',
           
         ]);

        $data = array();
        $data['loan_type'] = $request->loan_type;
        $data['business_name'] = $request->business_name;
        $data['business_address'] = $request->business_address;
        $data['type_of_business'] = $request->type_of_business;
        $data['business_experience'] = $request->business_experience;
        $data['monthly_sales'] = $request->monthly_sales;
        $data['repayment_type'] = $request->repayment_type;
        $data['price_of_sold_goods'] = $request->price_of_sold_goods; 
        $data['other_expenses'] = $request->other_expenses; 
        $data['net_profit'] = $request->net_profit; 
        $data['trade_license_no'] = $request->trade_license_no; 
        $data['national_id_no'] = $request->national_id_no; 
        $data['district'] = $request->district; 
        $data['loan_amount'] = $request->loan_amount; 
        $data['period_of_loan'] = $request->period_of_loan; 
        $data['client_id'] = $request->client_id; 
        $data['status'] = 'pending'; 
        $customer_id = DB::table('loan_applications')->insert($data);

        Mail::to('rashed@optima-solution.com')->send(new SendMailable($request));

        return back()->with('message', 'Your aplication has been sent! ');
    }
   

    public function loan_request(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('loan_applications')
            ->join('users', 'users.id', '=', 'loan_applications.client_id')
            
            ->select('loan_applications.*', 'users.*')
            ->get();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
   
                          
     
                        return '<a href="view/'.$row->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i> View</a> <a href="delte/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Approve</a> <a href="delte/'.$row->id.'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-remove"></i>Cancel</a> <a href="delte/'.$row->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('loan_request');
    }
}
