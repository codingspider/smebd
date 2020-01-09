<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;

class VoteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        return view('pages.show_vote');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

         DB::table('votes')->insert(
                        [
                        'voter_id' => $request->user_id,
                        'presidents'=> $request->presidents,
                        'vicepresidents'=> $request->vicepresidents,
                        'generalsecretary'=> $request->generalsecretary,
                        'treasurer'=> $request->treasurer,
                        'nonacademsecretay'=> $request->nonacademsecretay,
                        'informsecretay'=> $request->informsecretay,
                        'culturalsecretary'=> $request->culturalsecretary,
                        'cabinatesecretary'=>$request->cabinatesecretary,

                        ]
                    );

        if(is_array($request->jointsecretary)){
                foreach($request->jointsecretary as $answer)
                {
                    DB::table('votes')->insert(
                        [
                        'voter_id' => $request->user_id,
                        'jointsecretary'=> $answer

                        ]
                    );

                }
               //dd( $request->jointsecretary);

               
        }
        if(is_array($request->executivemember)){

            //dd($request->executivemember);
                foreach($request->executivemember as $executive)
                {
                    DB::table('votes')->insert(
                        [
                        'voter_id' => $request->user_id,
                        'executivemember'=> $executive

                        ]
                    );
                }
        }



            return redirect('/home')->with('success', 'Vote has been submitted');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function show(Vote $vote)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function edit(Vote $vote)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Vote $vote)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Vote  $vote
     * @return \Illuminate\Http\Response
     */
    public function destroy(Vote $vote)
    {
        //
    }


    public function voter_validation (Request $request)
    {
        $data = DB::table('voters')->where('reg_no', $request->voter_reg)->first();

        if($data->reg_no == $request->voter_reg && $data->pass_code == $request->pass_id ){

             $president =DB::table('canditates')->where('type','President')->get();
             $vicepresident =DB::table('canditates')->where('type','Vice-President')->get();
             $genral_secretary =DB::table('canditates')->where('type','General Secretary')->get();
             $joint_secretary =DB::table('canditates')->where('type','Joint Secretary')->get();
             $treasurer =DB::table('canditates')->where('type','Treasurer')->get();
             $organizing_secretary =DB::table('canditates')->where('type','Organizing Secretary')->get();
             $information_secretary =DB::table('canditates')->where('type','Information and Publication Secretary')->get();
             $cultural_secretary =DB::table('canditates')->where('type','Cultural Secretary')->get();
             $cabinate_secretary =DB::table('canditates')->where('type','Cabinet Secretary')->get();
             $executive_member =DB::table('canditates')->where('type','Executive Member')->get();



            return view('show_vote',compact('data','president','vicepresident','genral_secretary','joint_secretary','treasurer','organizing_secretary','information_secretary','cultural_secretary','cabinate_secretary', 'executive_member'));
        }else{

            return  view('voter_error');
        }

    }


    public function voter_passcode_change (Request $request)
    {
        $data = DB::table('voters')->where('pass_code', $request->pre_pass_code)->first();

        if($data->pass_code == $request->pre_pass_code){

           DB::table('voters')->update([

                'pass_code'=> $request->con_pass_code
           ]);

            return 'Your passcode has been changed';
        }else{

            return  view('voter_error');
        }

    }


}
