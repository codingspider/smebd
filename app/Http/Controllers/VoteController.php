<?php

namespace App\Http\Controllers;

use App\Vote;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use DB;
use Charts;
use App\User;
use Carbon\Carbon;

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
                'presidents' => $request->presidents,
                'vicepresidents' => $request->vicepresidents,
                'generalsecretary' => $request->generalsecretary,
                'treasurer' => $request->treasurer,
                'nonacademsecretay' => $request->nonacademsecretay,
                'informsecretay' => $request->informsecretay,
                'culturalsecretary' => $request->culturalsecretary,
                'cabinatesecretary' => $request->cabinatesecretary,

            ]
        );

        if (is_array($request->jointsecretary)) {
            foreach ($request->jointsecretary as $answer) {
                DB::table('votes')->insert(
                    [
                        'voter_id' => $request->user_id,
                        'jointsecretary' => $answer

                    ]
                );
            }
            //dd( $request->jointsecretary);


        }
        if (is_array($request->executivemember)) {

            //dd($request->executivemember);
            foreach ($request->executivemember as $executive) {
                DB::table('votes')->insert(
                    [
                        'voter_id' => $request->user_id,
                        'executivemember' => $executive

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


    public function voter_validation(Request $request)
    {
        $data = DB::table('voters')->where('reg_no', $request->voter_reg)->first();

        if ($data->reg_no == $request->voter_reg && $data->pass_code == $request->pass_id) {

            $president = DB::table('canditates')->where('type', 'President')->get();
            $vicepresident = DB::table('canditates')->where('type', 'Vice-President')->get();
            $genral_secretary = DB::table('canditates')->where('type', 'General Secretary')->get();
            $joint_secretary = DB::table('canditates')->where('type', 'Joint Secretary')->get();
            $treasurer = DB::table('canditates')->where('type', 'Treasurer')->get();
            $organizing_secretary = DB::table('canditates')->where('type', 'Organizing Secretary')->get();
            $information_secretary = DB::table('canditates')->where('type', 'Information and Publication Secretary')->get();
            $cultural_secretary = DB::table('canditates')->where('type', 'Cultural Secretary')->get();
            $cabinate_secretary = DB::table('canditates')->where('type', 'Cabinet Secretary')->get();
            $executive_member = DB::table('canditates')->where('type', 'Executive Member')->get();



            return view('show_vote', compact('data', 'president', 'vicepresident', 'genral_secretary', 'joint_secretary', 'treasurer', 'organizing_secretary', 'information_secretary', 'cultural_secretary', 'cabinate_secretary', 'executive_member'));
        } else {

            return  view('voter_error');
        }
    }


    public function voter_passcode_change(Request $request)
    {
        $data = DB::table('voters')->where('pass_code', $request->pre_pass_code)->first();

        if ($data->pass_code == $request->pre_pass_code) {

            DB::table('voters')->update([

                'pass_code' => $request->con_pass_code
            ]);

            return 'Your passcode has been changed';
        } else {

            return  view('voter_error');
        }
    }

    public function vote_update(Request $request)
    {
        $data = DB::table('votes')->where('id', $request->id)->update([

            'presidents' => $request->presidents
        ]);
        return  back()->with('success', 'Vote Updated');
    }

    public function voter_result_publish(Request $request)
    {

        $data = DB::table('result_publish_pass')->first();

        if ($data->passcode == $request->pass_code && $data->passcode == $request->pass_code2 && $data->passcode == $request->pass_code3 && $data->passcode == $request->pass_code4) {

            //$users = DB::table('votes')->get();

            $visitorTraffic = DB::table('votes')
                ->select('created_at', DB::raw('count(*) as views'))
                ->groupBy('created_at')
                ->get();


            $data = DB::table('votes')
                ->get();
            $dataset = array();
            foreach ($data as $dat) {
                if ($dat->presidents != null) {
                    $dataset[] = $dat->presidents;
                }
                if ($dat->vicepresidents != null) {
                    $dataset[] = $dat->vicepresidents;
                }
                if ($dat->generalsecretary != null) {
                    $dataset[] = $dat->generalsecretary;
                }
                if ($dat->jointsecretary != null) {
                    $dataset[] = $dat->jointsecretary;
                }
                if ($dat->treasurer != null) {
                    $dataset[] = $dat->treasurer;
                }
                if ($dat->nonacademsecretay != null) {
                    $dataset[] = $dat->nonacademsecretay;
                }
                if ($dat->informsecretay != null) {
                    $dataset[] = $dat->informsecretay;
                }
                if ($dat->culturalsecretary != null) {
                    $dataset[] = $dat->culturalsecretary;
                }
                if ($dat->cabinatesecretary != null) {
                    $dataset[] = $dat->cabinatesecretary;
                }
                if ($dat->executivemember != null) {
                    $dataset[] = $dat->executivemember;
                }
                if ($dat->no_votes != null) {
                    $dataset[] = $dat->no_votes;
                }
            }

            $canditates = DB::table('canditates')->where('type', 'Executive Member')
                ->get();


            $label = '';
            $votes_array = array_count_values($dataset);
            $votes_count = '';
            $count = 1;
            foreach ($canditates as $cande) {
                if ($count == 1) {
                    $label .= "'" . $cande->name . "'";
                    if($votes_array[$cande->id]){
                        $votes_count .= $votes_array[$cande->id];
                    }else{
                        $votes_count .= 0;
                    }

                } else {
                    $label .= ",'" . $cande->name . "'";
                    if ($votes_array[$cande->id]){
                        $votes_count .= "," . $votes_array[$cande->id];
                    }else{
                        $votes_count .= ",0";
                    }

                }




                $count++;
            }
            //  dd($votes_count);

            $dummy = "{
                labels: [$label],
                datasets: [{
                    label: 'Votes',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [$votes_count],
                    fill: false,
                }]
            }";

            return view('vote_result', compact('dummy'));
        } else {
            return  view('voter_error');
        }
    }
    public function cabinate_result_publish()
    {

        $data = DB::table('result_publish_pass')->first();

            //$users = DB::table('votes')->get();

            $visitorTraffic = DB::table('votes')
                ->select('created_at', DB::raw('count(*) as views'))
                ->groupBy('created_at')
                ->get();


            $data = DB::table('votes')
                ->get();
            $dataset = array();
            foreach ($data as $dat) {
                if ($dat->presidents != null) {
                    $dataset[] = $dat->presidents;
                }
                if ($dat->vicepresidents != null) {
                    $dataset[] = $dat->vicepresidents;
                }
                if ($dat->generalsecretary != null) {
                    $dataset[] = $dat->generalsecretary;
                }
                if ($dat->jointsecretary != null) {
                    $dataset[] = $dat->jointsecretary;
                }
                if ($dat->treasurer != null) {
                    $dataset[] = $dat->treasurer;
                }
                if ($dat->nonacademsecretay != null) {
                    $dataset[] = $dat->nonacademsecretay;
                }
                if ($dat->informsecretay != null) {
                    $dataset[] = $dat->informsecretay;
                }
                if ($dat->culturalsecretary != null) {
                    $dataset[] = $dat->culturalsecretary;
                }
                if ($dat->cabinatesecretary != null) {
                    $dataset[] = $dat->cabinatesecretary;
                }
                if ($dat->executivemember != null) {
                    $dataset[] = $dat->executivemember;
                }
                if ($dat->no_votes != null) {
                    $dataset[] = $dat->no_votes;
                }
            }

            $canditates = DB::table('canditates')->where('type', 'Cabinet Secretary')
                ->get();

            //dd($canditates);

            $label = '';
            $votes_array = array_count_values($dataset);
            $votes_count = '';
            $count = 1;
            foreach ($canditates as $cande) {
                if ($count == 1) {
                    $label .= "'" . $cande->name . "'";
                    if($votes_array[$cande->id]){
                        $votes_count .= $votes_array[$cande->id];
                    }else{
                        $votes_count .= 0;
                    }

                } else {
                    $label .= ",'" . $cande->name . "'";
                    if ($votes_array[$cande->id]){
                        $votes_count .= "," . $votes_array[$cande->id];
                    }else{
                        $votes_count .= ",0";
                    }

                }
                $count++;
            }
            //  dd($votes_count);

            $dummy = "{
                labels: [$label],
                datasets: [{
                    label: 'Votes',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [$votes_count],
                    fill: false,
                }]
            }";

            return view('votes.cabinate-secretary', compact('dummy'));
        }
    public function organising_result_publish ()
    {

        $data = DB::table('result_publish_pass')->first();

            //$users = DB::table('votes')->get();

            $visitorTraffic = DB::table('votes')
                ->select('created_at', DB::raw('count(*) as views'))
                ->groupBy('created_at')
                ->get();


            $data = DB::table('votes')
                ->get();
            $dataset = array();
            foreach ($data as $dat) {
                if ($dat->presidents != null) {
                    $dataset[] = $dat->presidents;
                }
                if ($dat->vicepresidents != null) {
                    $dataset[] = $dat->vicepresidents;
                }
                if ($dat->generalsecretary != null) {
                    $dataset[] = $dat->generalsecretary;
                }
                if ($dat->jointsecretary != null) {
                    $dataset[] = $dat->jointsecretary;
                }
                if ($dat->treasurer != null) {
                    $dataset[] = $dat->treasurer;
                }
                if ($dat->nonacademsecretay != null) {
                    $dataset[] = $dat->nonacademsecretay;
                }
                if ($dat->informsecretay != null) {
                    $dataset[] = $dat->informsecretay;
                }
                if ($dat->culturalsecretary != null) {
                    $dataset[] = $dat->culturalsecretary;
                }
                if ($dat->cabinatesecretary != null) {
                    $dataset[] = $dat->cabinatesecretary;
                }
                if ($dat->executivemember != null) {
                    $dataset[] = $dat->executivemember;
                }
                if ($dat->no_votes != null) {
                    $dataset[] = $dat->no_votes;
                }
            }

            $canditates = DB::table('canditates')->where('type', 'Organizing Secretary')
                ->get();

            //dd($canditates);

            $label = '';
            $votes_array = array_count_values($dataset);
            $votes_count = '';
            $count = 1;
            foreach ($canditates as $cande) {
                if ($count == 1) {
                    $label .= "'" . $cande->name . "'";
                    if($votes_array[$cande->id]){
                        $votes_count .= $votes_array[$cande->id];
                    }else{
                        $votes_count .= 0;
                    }

                } else {
                    $label .= ",'" . $cande->name . "'";
                    if ($votes_array[$cande->id]){
                        $votes_count .= "," . $votes_array[$cande->id];
                    }else{
                        $votes_count .= ",0";
                    }

                }
                $count++;
            }
            //  dd($votes_count);

            $dummy = "{
                labels: [$label],
                datasets: [{
                    label: 'Votes',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [$votes_count],
                    fill: false,
                }]
            }";

            return view('votes.organising', compact('dummy'));
        }

        public function information_result_publish()
    {

        // $data = DB::table('result_publish_pass')->first();

            //$users = DB::table('votes')->get();

            $visitorTraffic = DB::table('votes')
                ->select('created_at', DB::raw('count(*) as views'))
                ->groupBy('created_at')
                ->get();


            $data = DB::table('votes')
                ->get();
            $dataset = array();
            foreach ($data as $dat) {
                if ($dat->presidents != null) {
                    $dataset[] = $dat->presidents;
                }
                if ($dat->vicepresidents != null) {
                    $dataset[] = $dat->vicepresidents;
                }
                if ($dat->generalsecretary != null) {
                    $dataset[] = $dat->generalsecretary;
                }
                if ($dat->jointsecretary != null) {
                    $dataset[] = $dat->jointsecretary;
                }
                if ($dat->treasurer != null) {
                    $dataset[] = $dat->treasurer;
                }
                if ($dat->nonacademsecretay != null) {
                    $dataset[] = $dat->nonacademsecretay;
                }
                if ($dat->informsecretay != null) {
                    $dataset[] = $dat->informsecretay;
                }
                if ($dat->culturalsecretary != null) {
                    $dataset[] = $dat->culturalsecretary;
                }
                if ($dat->cabinatesecretary != null) {
                    $dataset[] = $dat->cabinatesecretary;
                }
                if ($dat->executivemember != null) {
                    $dataset[] = $dat->executivemember;
                }
                if ($dat->no_votes != null) {
                    $dataset[] = $dat->no_votes;
                }
            }
 $canditates = DB::table('canditates')->where('type','Information and Publication Secretary')
                ->get();

            // dd($canditates);

            $label = '';
            $votes_array = array_count_values($dataset);
            $votes_count = '';
            $count = 1;
            foreach ($canditates as $cande) {
                if ($count == 1) {
                    $label .= "'" . $cande->name . "'";
                    if($votes_array[$cande->id]){
                        $votes_count .= $votes_array[$cande->id];
                    }else{
                        $votes_count .= 0;
                    }

                } else {
                    $label .= ",'" . $cande->name . "'";
                    if ($votes_array[$cande->id]){
                        $votes_count .= "," . $votes_array[$cande->id];
                    }else{
                        $votes_count .= ",0";
                    }

                }




                $count++;
            }
            //  dd($votes_count);

            $dummy = "{
                labels: [$label],
                datasets: [{
                    label: 'Votes',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [$votes_count],
                    fill: false,
                }]
            }";

            return view('votes.information', compact('dummy'));
        }
        public function treasurer_result_publish ()
    {

        // $data = DB::table('result_publish_pass')->first();

            //$users = DB::table('votes')->get();

            $visitorTraffic = DB::table('votes')
                ->select('created_at', DB::raw('count(*) as views'))
                ->groupBy('created_at')
                ->get();


            $data = DB::table('votes')
                ->get();
            $dataset = array();
            foreach ($data as $dat) {
                if ($dat->presidents != null) {
                    $dataset[] = $dat->presidents;
                }
                if ($dat->vicepresidents != null) {
                    $dataset[] = $dat->vicepresidents;
                }
                if ($dat->generalsecretary != null) {
                    $dataset[] = $dat->generalsecretary;
                }
                if ($dat->jointsecretary != null) {
                    $dataset[] = $dat->jointsecretary;
                }
                if ($dat->treasurer != null) {
                    $dataset[] = $dat->treasurer;
                }
                if ($dat->nonacademsecretay != null) {
                    $dataset[] = $dat->nonacademsecretay;
                }
                if ($dat->informsecretay != null) {
                    $dataset[] = $dat->informsecretay;
                }
                if ($dat->culturalsecretary != null) {
                    $dataset[] = $dat->culturalsecretary;
                }
                if ($dat->cabinatesecretary != null) {
                    $dataset[] = $dat->cabinatesecretary;
                }
                if ($dat->executivemember != null) {
                    $dataset[] = $dat->executivemember;
                }
                if ($dat->no_votes != null) {
                    $dataset[] = $dat->no_votes;
                }
            }
 $canditates = DB::table('canditates')->where('type','Treasurer')
                ->get();

            // dd($canditates);

            $label = '';
            $votes_array = array_count_values($dataset);
            $votes_count = '';
            $count = 1;
            foreach ($canditates as $cande) {
                if ($count == 1) {
                    $label .= "'" . $cande->name . "'";
                    if($votes_array[$cande->id]){
                        $votes_count .= $votes_array[$cande->id];
                    }else{
                        $votes_count .= 0;
                    }

                } else {
                    $label .= ",'" . $cande->name . "'";
                    if ($votes_array[$cande->id]){
                        $votes_count .= "," . $votes_array[$cande->id];
                    }else{
                        $votes_count .= ",0";
                    }

                }




                $count++;
            }
            //  dd($votes_count);

            $dummy = "{
                labels: [$label],
                datasets: [{
                    label: 'Votes',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [$votes_count],
                    fill: false,
                }]
            }";

            return view('votes.treasurer', compact('dummy'));
        }

    public function cultural_result_publish()
    {

        $data = DB::table('result_publish_pass')->first();

            //$users = DB::table('votes')->get();

            $visitorTraffic = DB::table('votes')
                ->select('created_at', DB::raw('count(*) as views'))
                ->groupBy('created_at')
                ->get();


            $data = DB::table('votes')
                ->get();
            $dataset = array();
            foreach ($data as $dat) {
                if ($dat->presidents != null) {
                    $dataset[] = $dat->presidents;
                }
                if ($dat->vicepresidents != null) {
                    $dataset[] = $dat->vicepresidents;
                }
                if ($dat->generalsecretary != null) {
                    $dataset[] = $dat->generalsecretary;
                }
                if ($dat->jointsecretary != null) {
                    $dataset[] = $dat->jointsecretary;
                }
                if ($dat->treasurer != null) {
                    $dataset[] = $dat->treasurer;
                }
                if ($dat->nonacademsecretay != null) {
                    $dataset[] = $dat->nonacademsecretay;
                }
                if ($dat->informsecretay != null) {
                    $dataset[] = $dat->informsecretay;
                }
                if ($dat->culturalsecretary != null) {
                    $dataset[] = $dat->culturalsecretary;
                }
                if ($dat->cabinatesecretary != null) {
                    $dataset[] = $dat->cabinatesecretary;
                }
                if ($dat->executivemember != null) {
                    $dataset[] = $dat->executivemember;
                }
                if ($dat->no_votes != null) {
                    $dataset[] = $dat->no_votes;
                }
            }

            $canditates = DB::table('canditates')->where('type', 'Cultural Secretary')
                ->get();

            //dd($canditates);

            $label = '';
            $votes_array = array_count_values($dataset);
            $votes_count = '';
            $count = 1;
            foreach ($canditates as $cande) {
                if ($count == 1) {
                    $label .= "'" . $cande->name . "'";
                    if($votes_array[$cande->id]){
                        $votes_count .= $votes_array[$cande->id];
                    }else{
                        $votes_count .= 0;
                    }

                } else {
                    $label .= ",'" . $cande->name . "'";
                    if ($votes_array[$cande->id]){
                        $votes_count .= "," . $votes_array[$cande->id];
                    }else{
                        $votes_count .= ",0";
                    }

                }




                $count++;
            }
            //  dd($votes_count);

            $dummy = "{
                labels: [$label],
                datasets: [{
                    label: 'Votes',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [$votes_count],
                    fill: false,
                }]
            }";

            return view('votes.cultural', compact('dummy'));
        }
    public function general_secretary_result_publish ()
    {

        $data = DB::table('result_publish_pass')->first();

            //$users = DB::table('votes')->get();

            $visitorTraffic = DB::table('votes')
                ->select('created_at', DB::raw('count(*) as views'))
                ->groupBy('created_at')
                ->get();


            $data = DB::table('votes')
                ->get();
            $dataset = array();
            foreach ($data as $dat) {
                if ($dat->presidents != null) {
                    $dataset[] = $dat->presidents;
                }
                if ($dat->vicepresidents != null) {
                    $dataset[] = $dat->vicepresidents;
                }
                if ($dat->generalsecretary != null) {
                    $dataset[] = $dat->generalsecretary;
                }
                if ($dat->jointsecretary != null) {
                    $dataset[] = $dat->jointsecretary;
                }
                if ($dat->treasurer != null) {
                    $dataset[] = $dat->treasurer;
                }
                if ($dat->nonacademsecretay != null) {
                    $dataset[] = $dat->nonacademsecretay;
                }
                if ($dat->informsecretay != null) {
                    $dataset[] = $dat->informsecretay;
                }
                if ($dat->culturalsecretary != null) {
                    $dataset[] = $dat->culturalsecretary;
                }
                if ($dat->cabinatesecretary != null) {
                    $dataset[] = $dat->cabinatesecretary;
                }
                if ($dat->executivemember != null) {
                    $dataset[] = $dat->executivemember;
                }
                if ($dat->no_votes != null) {
                    $dataset[] = $dat->no_votes;
                }
            }

            $canditates = DB::table('canditates')->where('type', 'General Secretary')
                ->get();

            //dd($canditates);

            $label = '';
            $votes_array = array_count_values($dataset);
            $votes_count = '';
            $count = 1;
            foreach ($canditates as $cande) {
                if ($count == 1) {
                    $label .= "'" . $cande->name . "'";
                    if($votes_array[$cande->id]){
                        $votes_count .= $votes_array[$cande->id];
                    }else{
                        $votes_count .= 0;
                    }

                } else {
                    $label .= ",'" . $cande->name . "'";
                    if ($votes_array[$cande->id]){
                        $votes_count .= "," . $votes_array[$cande->id];
                    }else{
                        $votes_count .= ",0";
                    }

                }




                $count++;
            }
            //  dd($votes_count);

            $dummy = "{
                labels: [$label],
                datasets: [{
                    label: 'Votes',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [$votes_count],
                    fill: false,
                }]
            }";

            return view('votes.general', compact('dummy'));
        }
    public function joint_secretary_result_publish ()
    {

        $data = DB::table('result_publish_pass')->first();

            //$users = DB::table('votes')->get();

            $visitorTraffic = DB::table('votes')
                ->select('created_at', DB::raw('count(*) as views'))
                ->groupBy('created_at')
                ->get();


            $data = DB::table('votes')
                ->get();
            $dataset = array();
            foreach ($data as $dat) {
                if ($dat->presidents != null) {
                    $dataset[] = $dat->presidents;
                }
                if ($dat->vicepresidents != null) {
                    $dataset[] = $dat->vicepresidents;
                }
                if ($dat->generalsecretary != null) {
                    $dataset[] = $dat->generalsecretary;
                }
                if ($dat->jointsecretary != null) {
                    $dataset[] = $dat->jointsecretary;
                }
                if ($dat->treasurer != null) {
                    $dataset[] = $dat->treasurer;
                }
                if ($dat->nonacademsecretay != null) {
                    $dataset[] = $dat->nonacademsecretay;
                }
                if ($dat->informsecretay != null) {
                    $dataset[] = $dat->informsecretay;
                }
                if ($dat->culturalsecretary != null) {
                    $dataset[] = $dat->culturalsecretary;
                }
                if ($dat->cabinatesecretary != null) {
                    $dataset[] = $dat->cabinatesecretary;
                }
                if ($dat->executivemember != null) {
                    $dataset[] = $dat->executivemember;
                }
                if ($dat->no_votes != null) {
                    $dataset[] = $dat->no_votes;
                }
            }

            $canditates = DB::table('canditates')->where('type', 'Joint Secretary')
                ->get();

            //dd($canditates);

            $label = '';
            $votes_array = array_count_values($dataset);
            $votes_count = '';
            $count = 1;
            foreach ($canditates as $cande) {
                if ($count == 1) {
                    $label .= "'" . $cande->name . "'";
                    if($votes_array[$cande->id]){
                        $votes_count .= $votes_array[$cande->id];
                    }else{
                        $votes_count .= 0;
                    }

                } else {
                    $label .= ",'" . $cande->name . "'";
                    if ($votes_array[$cande->id]){
                        $votes_count .= "," . $votes_array[$cande->id];
                    }else{
                        $votes_count .= ",0";
                    }

                }




                $count++;
            }
            //  dd($votes_count);

            $dummy = "{
                labels: [$label],
                datasets: [{
                    label: 'Votes',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [$votes_count],
                    fill: false,
                }]
            }";

            return view('votes.joint', compact('dummy'));
        }
    public function vice_president_result_publish ()
    {

        $data = DB::table('result_publish_pass')->first();

            //$users = DB::table('votes')->get();

            $visitorTraffic = DB::table('votes')
                ->select('created_at', DB::raw('count(*) as views'))
                ->groupBy('created_at')
                ->get();


            $data = DB::table('votes')
                ->get();
            $dataset = array();
            foreach ($data as $dat) {
                if ($dat->presidents != null) {
                    $dataset[] = $dat->presidents;
                }
                if ($dat->vicepresidents != null) {
                    $dataset[] = $dat->vicepresidents;
                }
                if ($dat->generalsecretary != null) {
                    $dataset[] = $dat->generalsecretary;
                }
                if ($dat->jointsecretary != null) {
                    $dataset[] = $dat->jointsecretary;
                }
                if ($dat->treasurer != null) {
                    $dataset[] = $dat->treasurer;
                }
                if ($dat->nonacademsecretay != null) {
                    $dataset[] = $dat->nonacademsecretay;
                }
                if ($dat->informsecretay != null) {
                    $dataset[] = $dat->informsecretay;
                }
                if ($dat->culturalsecretary != null) {
                    $dataset[] = $dat->culturalsecretary;
                }
                if ($dat->cabinatesecretary != null) {
                    $dataset[] = $dat->cabinatesecretary;
                }
                if ($dat->executivemember != null) {
                    $dataset[] = $dat->executivemember;
                }
                if ($dat->no_votes != null) {
                    $dataset[] = $dat->no_votes;
                }
            }

            $canditates = DB::table('canditates')->where('type', 'Vice-President')
                ->get();

            //dd($canditates);

            $label = '';
            $votes_array = array_count_values($dataset);
            $votes_count = '';
            $count = 1;
            foreach ($canditates as $cande) {
                if ($count == 1) {
                    $label .= "'" . $cande->name . "'";
                    if($votes_array[$cande->id]){
                        $votes_count .= $votes_array[$cande->id];
                    }else{
                        $votes_count .= 0;
                    }

                } else {
                    $label .= ",'" . $cande->name . "'";
                    if ($votes_array[$cande->id]){
                        $votes_count .= "," . $votes_array[$cande->id];
                    }else{
                        $votes_count .= ",0";
                    }

                }




                $count++;
            }
            //  dd($votes_count);

            $dummy = "{
                labels: [$label],
                datasets: [{
                    label: 'Votes',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [$votes_count],
                    fill: false,
                }]
            }";

            return view('votes.vice_president', compact('dummy'));
        }
    public function president_result_publish ()
    {

        $data = DB::table('result_publish_pass')->first();

            //$users = DB::table('votes')->get();

            $visitorTraffic = DB::table('votes')
                ->select('created_at', DB::raw('count(*) as views'))
                ->groupBy('created_at')
                ->get();


            $data = DB::table('votes')
                ->get();
            $dataset = array();
            foreach ($data as $dat) {
                if ($dat->presidents != null) {
                    $dataset[] = $dat->presidents;
                }
                if ($dat->vicepresidents != null) {
                    $dataset[] = $dat->vicepresidents;
                }
                if ($dat->generalsecretary != null) {
                    $dataset[] = $dat->generalsecretary;
                }
                if ($dat->jointsecretary != null) {
                    $dataset[] = $dat->jointsecretary;
                }
                if ($dat->treasurer != null) {
                    $dataset[] = $dat->treasurer;
                }
                if ($dat->nonacademsecretay != null) {
                    $dataset[] = $dat->nonacademsecretay;
                }
                if ($dat->informsecretay != null) {
                    $dataset[] = $dat->informsecretay;
                }
                if ($dat->culturalsecretary != null) {
                    $dataset[] = $dat->culturalsecretary;
                }
                if ($dat->cabinatesecretary != null) {
                    $dataset[] = $dat->cabinatesecretary;
                }
                if ($dat->executivemember != null) {
                    $dataset[] = $dat->executivemember;
                }
                if ($dat->no_votes != null) {
                    $dataset[] = $dat->no_votes;
                }
            }

            $canditates = DB::table('canditates')->where('type', 'President')
                ->get();
            //dd($canditates);

            $label = '';
            $votes_array = array_count_values($dataset);
            $votes_count = '';
            $count = 1;
            foreach ($canditates as $cande) {
                if ($count == 1) {
                    $label .= "'" . $cande->name . "'";
                    if($votes_array[$cande->id]){
                        $votes_count .= $votes_array[$cande->id];
                    }else{
                        $votes_count .= 0;
                    }

                } else {
                    $label .= ",'" . $cande->name . "'";
                    if ($votes_array[$cande->id]){
                        $votes_count .= "," . $votes_array[$cande->id];
                    }else{
                        $votes_count .= ",0";
                    }

                }




                $count++;
            }
            //  dd($votes_count);

            $dummy = "{
                labels: [$label],
                datasets: [{
                    label: 'Votes',
                    backgroundColor: window.chartColors.red,
                    borderColor: window.chartColors.red,
                    data: [$votes_count],
                    fill: false,
                }]
            }";

            return view('votes.president', compact('dummy'));
        }

}
