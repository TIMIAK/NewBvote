@extends('layouts.app')
@section('content')
<div class="row justify-content-center">

    <div class="col-9 insidecontainer justify-content-center">
        <div class="justify-content-center">
            <h3>Create New Poll</h3>
        </div>
        <form action="/SubmitCreatePoll" method="PUT">
            <div class="form-group">
                <div class="row">
                    <div class="col-6">
                        <label for="votetitle" class="text-danger">Title</label>
                        <input type="text" name="Vote_Title" class="form-control" id="votetitle" placeholder="Enter Title" required>
                    </div>
                    <div class="col-6">
                        <label for="votetitle" class="text-danger">Name of Contestant ( <small>If more than one seperate with a comma " , "</small> )</label>
                        <div class="input-group">
                            <input type="text" id="Name_of_Contestant" name="Name_of_Contestant" class="form-control" placeholder="Name of Contestant" required>

                        </div>
                    </div>

                </div>
                <hr>
                <div class="row">
                   <div class="col">
                        <label for="votetitle" class="text-danger">Email of Voters ( <small>If more than one seperate with a comma " , "</small> )</label>
                        <div class="input-group">
                            <input type="text" class="form-control" id="Email_Of_Voters" name="Email_Of_Voters" placeholder="Email Address of Voters" required>
                            <div class="input-group-append">
                        </div>
                        </div>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <label for="votetitle" class="text-danger">Start Date(From)</label><br>
                        <input type="date" name="Start_Date" class="form-control" id="votetitle" placeholder="Enter Title" required>
                    </div>
                    <div class="col-6">
                        <label for="votetitle" class="text-danger">Stop Date(To)</label><br>
                        <input type="date" name="End_Date" class="form-control" id="votetitle" placeholder="Enter Title" required>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-6">
                        <label for="votetitle" class="text-danger">Start Time</label><br>
                        <input type="time" name="Start_Time" class="form-control" id="votetitle" placeholder="Enter Title" required>
                    </div>
                    <div class="col-6">
                        <label for="votetitle" class="text-danger">End Time</label><br>
                        <input type="time" name="End_Time" class="form-control" id="votetitle" placeholder="Enter Title" required>
                    </div>
                </div>

                <hr>
                <div>
                    <button type="submit" name="Submit" class="btn btn-outline-secondary">Submit</button>
                </div>

            </div>
        </form>
    </div>
</div>
@endsection
