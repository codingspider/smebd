<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMailable;
use DataTables;
use App\User;

use Dompdf\Dompdf;
use Dompdf\Options;
use Exception;
use App;
use PDF;
use Alert;

class LoanController extends Controller
{

    public function form(){

        return view ('application_form');
    }
    public function create (Request $request){


        $images = $request->file('images');
            if ($request->hasFile('images')) :
                    foreach ($images as $item):
                        $var = date_create();
                        $time = date_format($var, 'YmdHis');
                        $imageName = rand(11111111, 99999999).'.'. $item->getClientOriginalExtension();
                        $destinationPath = public_path('/uploads');
                        $item->move($destinationPath, $imageName);
                        $arr[] = $imageName;
                    endforeach;
                    $image = implode(",", $arr);
            else:
                    $image = '';
            endif;

        $validator = $this->validate($request, [
             'name' => 'required | string ',
             'address' => 'required | string ',
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
        $data['name'] = $request->name;
        $data['address'] = $request->address;
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
        $data['images'] = $image; 
        $customer_id = DB::table('loan_applications')->insert($data);

        $data['client_email'] = $request->client_email; 

        //Feedback mail to client
        $pdf = PDF::loadView('myPDF', $data)->setPaper('a4'); 
        Mail::send('success_mail_send', $data, function($message) use ($data,$pdf){
                $message->from($data['client_email']);
                $message->to('rashed@optima-solution.com');
                $message->subject('Application');
                //Attach PDF doc
                $message->attachData($pdf->output(),'application.pdf');
            });
        //Feedback mail to client
        $pdf = PDF::loadView('myPDF', $data)->setPaper('a4'); 
        Mail::send('success_mail', $data, function($message) use ($data,$pdf){
                $message->from('rashed@optima-solution.com');
                $message->to($data['client_email']);
                $message->subject('Thank you message');
                //Attach PDF doc
                $message->attachData($pdf->output(),'customer.pdf');
            });
            
        return back()->with('message', 'Your aplication has been sent! ');
    }
   

    public function loan_request(Request $request)
    {
        if ($request->ajax()) {
            $data = DB::table('loan_applications')
            
            ->get();

            return Datatables::of($data)
                    ->addIndexColumn()
                    ->addColumn('action', function($row){
                        return '<a href="view/'.$row->id.'" class="btn btn-xs btn-primary"><i class="glyphicon glyphicon-eye-open"></i> View</a> <a href="approve/'.$row->id.'" class="btn btn-xs btn-success"><i class="glyphicon glyphicon-ok"></i> Approve</a> <a href="cancel/'.$row->id.'" class="btn btn-xs btn-warning"><i class="glyphicon glyphicon-remove"></i>Cancel</a> <a href="delete/'.$row->id.'" class="btn btn-xs btn-danger"><i class="glyphicon glyphicon-trash"></i> Delete</a>';
                    })
                    ->rawColumns(['action'])
                    ->make(true);
        }
      
        return view('loan_request');
    }

    public function loan_request_details($id){

        $data = DB::table('loan_applications')

        ->join('users', 'users.id', '=', 'loan_applications.client_id')
            
        ->select('loan_applications.*', 'users.*')

        ->where('loan_applications.id', $id)->first();


        return view ('loan_request_details', compact('data'));
    }

    
    public function loan_request_approve($id){
        $data = DB::table('loan_applications')
        
        ->where('id', $id)->update([
            'status' => 'Approved',
            'status_value' => 1,
        ]);

        alert()->success('Success Message', 'Optional Title');

        return back();
      
    }
    public function loan_request_cancel ($id){
        $data = DB::table('loan_applications')
        
        ->where('id', $id)->update([
            'status' => 'Cancelled',
            'status_value' => 0,
        ]);

        return back()->with('warning', 'Loan has been cancelled successfully.');
    }
    public function loan_request_delete ($id){
        $data = DB::table('loan_applications')
        
        ->where('id', $id)->delete();
        return back()->with('danger', 'Requested data has been deleted successfully.');
    }
}
