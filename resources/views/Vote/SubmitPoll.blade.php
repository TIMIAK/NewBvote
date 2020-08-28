@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-9 insidecontainer justify-content-center">
        <form action="/SearchPoll" method="PUT">
            <div class="form-group">
                <div class="row">

                    <div class="col pt-5">
                        <label for="votecode" class="text-danger">Enter Vote Code</label>
                        <input type="text" class="form-control" name="Vote_Code" id="votecode">
                        <label for="voteremail" class="text-danger mt-2">Enter Email Address</label>
                        <input type="email" class="form-control" name="Voters_Email" id="voteremail">
                        <button type="submit" class="mt-3 btn btn-outline-secondary">Submit</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
@endsection
