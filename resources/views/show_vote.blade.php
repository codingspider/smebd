@extends('welcome')
@section('title', 'Vote')
@section('modal')
<!-- Modal -->
<div style="z-index: 999999" class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vote Confirmation </h5>
            </div>
            <div class="modal-body">
                Are you sure to confirm your vote, Remember you can not roll back your vote.Once you have confirmed this.
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Let me check again</button>
                <button type="button" id="confirmvote" class="btn btn-success">Confirm My Vote</button>
            </div>
        </div>
    </div>
</div>
@endsection
@section('content')
<link rel="stylesheet" href="{{ asset('css/vote.css') }}">
<link rel="stylesheet" href="{{ asset('css/style.css') }}">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>

<script type="text/javascript">
    function checkboxlimit(checkgroup, limit) {
        var checkgroup = checkgroup
        var limit = limit
        for (var i = 0; i < checkgroup.length; i++) {
            checkgroup[i].onclick = function() {
                var checkedcount = 0
                for (var i = 0; i < checkgroup.length; i++)
                    checkedcount += (checkgroup[i].checked) ? 1 : 0
                if (checkedcount > limit) {
                    alert("You can vote only " + limit + " for this Canditate")
                    this.checked = false
                }
            }
        }
    }
</script>

<div class="container">

    <form style="color:white" action="{{  route('vote-submit') }}" id="world" name="world" method="POST">
        {{ csrf_field() }}
        <h1>Voting Page :</h1>
        <!-- One "tab" for each step in the form: -->
        <div class="tab">
            <h2>President (Vote for 1 Candidate) *<h2>
                    <div class="row">
                        @foreach($president as $value)
                        <div class="col-md-3">
                            <div class="card">
                                <img class="rounded mx-auto d-block" src="{{ asset($value->images) }}" style="width: 200px" alt="Responsive image">
                                <br>
                                <div class="card-block">
                                    <h6 style="font-size: 14px;">Name: Mr/s {{ $value->name }}</h6>
                                    <h6 style="font-size: 14px;">SIPEAA ID: {{ $value->sipeaa_id }}</h6>
                                    <h6 style="font-size: 14px;">Batch: {{ $value->batch_no }}</h6>
                                    <div class="checkboxes">
                                        <section>
                                            <div class="checkbox">
                                                <input name="presidents" type="checkbox" value="{{ $value->id }}" />
                                                <label></label>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>



        </div>
        <div class="tab">
            <h2>Vice-President-Non Academic (Vote for 1 Candidate) *<h2>
                    <div class="row">
                        @foreach($vicepresident as $vpresident)
                        <div class="col-md-3">
                            <div class="card">
                                <img class="rounded mx-auto d-block" src="{{ asset($value->images) }}" style="width: 200px" alt="Responsive image">
                                <br>
                                <div class="card-block">
                                    <h6 style="font-size: 14px;">Name: Mr/s {{ $vpresident->name }}</h6>
                                    <h6 style="font-size: 14px;">SIPEAA ID: {{ $vpresident->sipeaa_id }}</h6>
                                    <h6 style="font-size: 14px;">Batch: {{ $vpresident->batch_no }}</h6>
                                    <div class="checkboxes">
                                        <section>
                                            <div class="checkbox">
                                                <input name="vicepresidents" value="{{ $vpresident->id }}" type="checkbox" />
                                                <label></label>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>

        </div>
        <div class="tab">
            <h2>General Secretary (Vote for 1 Candidate) *<h2>
                    <div class="row">
                        @foreach($genral_secretary as $gene_secretary)
                        <div class="col-md-3">
                            <div class="card">
                                <img class="rounded mx-auto d-block" src="{{ asset($value->images) }}" style="width: 200px" alt="Responsive image">
                                <br>
                                <div class="card-block">
                                    <h6 style="font-size: 14px;">Name: Mr/s {{ $gene_secretary->name }}</h6>
                                    <h6 style="font-size: 14px;">SIPEAA ID: {{ $gene_secretary->sipeaa_id }}</h6>
                                    <h6 style="font-size: 14px;">Batch: {{ $gene_secretary->batch_no }}</h6>
                                    <div class="checkboxes">
                                        <section>
                                            <div class="checkbox">
                                                <input name="generalsecretary" value="{{ $gene_secretary->id }}" type="checkbox" />
                                                <label></label>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
        </div>
        <div class="tab">
            <h2>Joint Secretary (Vote for 2 Candidates) *<h2>
                    <div class="row">
                        @foreach($joint_secretary as $joint_sec)
                        <div class="col-md-3">
                            <div class="card">
                                <img class="rounded mx-auto d-block" src="{{ asset($value->images) }}" style="width: 200px" alt="Responsive image">
                                <br>
                                <div class="card-block">
                                    <h6 style="font-size: 14px;">Name: Mr/s {{ $joint_sec->name }}</h6>
                                    <h6 style="font-size: 14px;">SIPEAA ID: {{ $joint_sec->sipeaa_id }}</h6>
                                    <h6 style="font-size: 14px;">Batch: {{ $joint_sec->batch_no }}</h6>
                                    <div class="checkboxes">
                                        <section>
                                            <div class="checkbox">
                                                <input name="jointsecretary[]" class="jointsecretary" onClick="return KeepCount()" value="{{ $joint_sec->id }}" type="checkbox" />
                                                <label></label>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
        </div>
        <input type="hidden" name="user_id" value="{{ $data->reg_no }}"></input>
        <div class="tab">
            <h2>Treasurer (Vote for 1 Candidate) *<h2>
                    <div class="row">
                        @foreach($treasurer as $tresure)
                        <div class="col-md-3">
                            <div class="card">
                                <img class="rounded mx-auto d-block" src="{{ asset($value->images) }}" style="width: 200px" alt="Responsive image">
                                <br>
                                <div class="card-block">
                                    <h6 style="font-size: 14px;">Name: Mr/s {{ $tresure->name }}</h6>
                                    <h6 style="font-size: 14px;">SIPEAA ID: {{ $tresure->sipeaa_id }}</h6>
                                    <h6 style="font-size: 14px;">Batch: {{ $tresure->batch_no }}</h6>
                                    <div class="checkboxes">
                                        <section>
                                            <div class="checkbox">
                                                <input name="treasurer" value="{{ $tresure->id }}" type="checkbox" />
                                                <label></label>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
        </div>
        <div class="tab">
            <h2>Organizing Secretary-Non Academic (Vote for 1 Candidate) *<h2>
                    <div class="row">
                        @foreach($organizing_secretary as $organizing_sec)
                        <div class="col-md-3">
                            <div class="card">
                                <img class="rounded mx-auto d-block" src="{{ asset($value->images) }}" style="width: 200px" alt="Responsive image">
                                <br>
                                <div class="card-block">
                                    <h6 style="font-size: 14px;">Name: Mr/s {{ $organizing_sec->name }}</h6>
                                    <h6 style="font-size: 14px;">SIPEAA ID: {{ $organizing_sec->sipeaa_id }}</h6>
                                    <h6 style="font-size: 14px;">Batch: {{ $organizing_sec->batch_no }}</h6>
                                    <div class="checkboxes">
                                        <section>
                                            <div class="checkbox">
                                                <input name="nonacademsecretay" value="{{ $organizing_sec->id }}" type="checkbox" />
                                                <label></label>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
        </div>
        <div class="tab">
            <h2>Information & Publication secretary (Vote for only 1 Candidate.) *<h2>
                    <div class="row">
                        @foreach($information_secretary as $information_sec)
                        <div class="col-md-3">
                            <div class="card">
                                <img class="rounded mx-auto d-block" src="{{ asset($value->images) }}" style="width: 200px" alt="Responsive image">
                                <br>
                                <div class="card-block">
                                    <h6 style="font-size: 14px;">Name: Mr/s {{ $information_sec->name }}</h6>
                                    <h6 style="font-size: 14px;">SIPEAA ID: {{ $information_sec->sipeaa_id }}</h6>
                                    <h6 style="font-size: 14px;">Batch: {{ $information_sec->batch_no }}</h6>
                                    <div class="checkboxes">
                                        <section>
                                            <div class="checkbox">
                                                <input name="informsecretay" value="{{ $information_sec->id }}" type="checkbox" />
                                                <label></label>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
        </div>
        <div class="tab">
            <h2>Cultural secretary (Vote for 1 Candidate) *<h2>
                    <div class="row">
                        @foreach($cultural_secretary as $cultural_sec)
                        <div class="col-md-3">
                            <div class="card">
                                <img class="rounded mx-auto d-block" src="{{ asset($value->images) }}" style="width: 200px" alt="Responsive image">
                                <br>
                                <div class="card-block">
                                    <h6 style="font-size: 14px;">Name: Mr/s {{ $cultural_sec->name }}</h6>
                                    <h6 style="font-size: 14px;">SIPEAA ID: {{ $cultural_sec->sipeaa_id }}</h6>
                                    <h6 style="font-size: 14px;">Batch: {{ $cultural_sec->batch_no }}</h6>
                                    <div class="checkboxes">
                                        <section>
                                            <div class="checkbox">
                                                <input name="culturalsecretary" value="{{ $cultural_sec->id }}" type="checkbox" />
                                                <label></label>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
        </div>
        <div class="tab">
            <h2>Cabinet secretary (Vote for 1 Candidate) *<h2>
                    <div class="row">
                        @foreach($cabinate_secretary as $cabinate_sec)
                        <div class="col-md-3">
                            <div class="card">
                                <img class="rounded mx-auto d-block" src="{{ asset($value->images) }}" style="width: 200px" alt="Responsive image">
                                <br>
                                <div class="card-block">
                                    <h6 style="font-size: 14px;">Name: Mr/s {{ $cabinate_sec->name }}</h6>
                                    <h6 style="font-size: 14px;">SIPEAA ID: {{ $cabinate_sec->sipeaa_id }}</h6>
                                    <h6 style="font-size: 14px;">Batch: {{ $cabinate_sec->batch_no }}</h6>
                                    <div class="checkboxes">
                                        <section>
                                            <div class="checkbox">
                                                <input name="cabinatesecretary" value="{{ $cabinate_sec->id }}" type="checkbox" />
                                                <label></label>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
        </div>


        <div class="tab">
            <h2>Executive Member-Non Academic (Vote for 7 Candidates) *
                <h2>
                    <div class="row">
                        @foreach($executive_member as $executive_mem)
                        <div class="col-md-3">
                            <div class="card">
                                <img class="rounded mx-auto d-block" src="{{ asset($value->images) }}" style="width: 200px" alt="Responsive image">
                                <br>
                                <div class="card-block">
                                    <h6 style="font-size: 14px;">Name: Mr/s {{ $executive_mem->name }}</h6>
                                    <h6 style="font-size: 14px;">SIPEAA ID: {{ $executive_mem->sipeaa_id }}</h6>
                                    <h6 style="font-size: 14px;">Batch: {{ $executive_mem->batch_no }}</h6>
                                    <div class="checkboxes">
                                        <section>
                                            <div class="checkbox">
                                                <input name="executivemember[]" value="{{ $executive_mem->id }}" type="checkbox" />
                                                <label></label>
                                            </div>
                                        </section>

                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
        </div>


        <div style="overflow:auto;">
            <div style="float:right;">
                <button type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                <button type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
            </div>
        </div>
        <!-- Circles which indicates the steps of the form: -->
        <div style="text-align:center;margin-top:40px;">
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <span class="step"></span>
            <!-- <span class="step"></span> -->
        </div>
    </form>

</div>

<script type="text/javascript">
    checkboxlimit(document.forms.world.presidents, 1)
    // checkboxlimit(document.forms.world.jointsecretary, 2)
    checkboxlimit(document.forms.world.vicepresidents, 1)
    checkboxlimit(document.forms.world.generalsecretary, 1)
    checkboxlimit(document.forms.world.treasurer, 1)
    checkboxlimit(document.forms.world.nonacademsecretay, 1)
    checkboxlimit(document.forms.world.informsecretay, 1)
    checkboxlimit(document.forms.world.cabinatesecretary, 1)
    checkboxlimit(document.forms.world.culturalsecretary, 1)

    var formCkbc = document.world["executivemember[]"];

    for (var i = 0; i < formCkbc.length; i++) {
        formCkbc[i].addEventListener("change", chkcontrol, false);
    }

    function chkcontrol() {
        var tot = 0;
        for (var i = 0; i < formCkbc.length; i++) tot += formCkbc[i].checked;
        if (tot > 7) {
            alert("Please Select only 7");
            return this.checked = false;
        }
    }
</script>

<script type="text/javascript">
    function KeepCount() {
        var inputTags = document.getElementsByName('jointsecretary[]');
        var total = 0;

        for (var i = 0; i < inputTags.length; i++) {

            if (inputTags[i].checked) {
                total = total + 1;
            }

            if (total > 2) {
                alert('Please Select only 2')
                inputTags[i].checked = false;
                return false;
            }
        }
    }
</script>


<script>
    var currentTab = 0; // Current tab is set to be the first tab (0)
    showTab(currentTab); // Display the current tab

    function showTab(n) {
        // This function will display the specified tab of the form...
        var x = document.getElementsByClassName("tab");
        x[n].style.display = "block";
        //... and fix the Previous/Next buttons:
        if (n == 0) {
            document.getElementById("prevBtn").style.display = "none";
        } else {
            document.getElementById("prevBtn").style.display = "inline";
        }
        if (n == (x.length - 1)) {
            document.getElementById("nextBtn").innerHTML = "Submit";
        } else {
            document.getElementById("nextBtn").innerHTML = "Next";
        }
        //... and run a function that will display the correct step indicator:
        fixStepIndicator(n)
    }

    function nextPrev(n) {
        // This function will figure out which tab to display
        var x = document.getElementsByClassName("tab");
        // Exit the function if any field in the current tab is invalid:
        if (n == 1 && !validateForm()) return false;
        // Hide the current tab:

        if (currentTab == x.length - 1) {
            if (n != -1) {
                // ... the form gets submitted:
                //document.getElementById("world").submit();
                //console.log('clicked');
                $('#exampleModal').modal('show');
                return false;
            } else {
                x[currentTab].style.display = "none";
                // Increase or decrease the current tab by 1:
                currentTab = currentTab + n;
                showTab(currentTab);
            }

        } else {
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            // Otherwise, display the correct tab:
            showTab(currentTab);
            console.log(currentTab);
        }

    }

    function validateForm() {
        // This function deals with validation of the form fields
        var x, y, i, valid = true;
        x = document.getElementsByClassName("tab");
        y = x[currentTab].getElementsByTagName("input");
        // A loop that checks every input field in the current tab:
        for (i = 0; i < y.length; i++) {
            // If a field is empty...
            if (y[i].value == "") {
                // add an "invalid" class to the field:
                y[i].className += " invalid";
                // and set the current valid status to false
                valid = false;
            }
        }
        // If the valid status is true, mark the step as finished and valid:
        if (valid) {
            document.getElementsByClassName("step")[currentTab].className += " finish";
        }
        return valid; // return the valid status
    }

    function fixStepIndicator(n) {
        // This function removes the "active" class of all steps...
        var i, x = document.getElementsByClassName("step");
        for (i = 0; i < x.length; i++) {
            x[i].className = x[i].className.replace(" active", "");
        }
        //... and adds the "active" class on the current step:
        x[n].className += " active";
    }

    $('#confirmvote').on('click', function(e) {
        document.getElementById("world").submit();
    })
</script>
@endsection
