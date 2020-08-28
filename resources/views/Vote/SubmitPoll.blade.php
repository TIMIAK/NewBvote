@extends('layouts.app')
@section('content')
<div class="row justify-content-center">
    <div class="col-9 insidecontainer justify-content-center">
        <form action="#" method="PUT">
            <div class="form-group">
                <div class="row">

                    <div class="col pt-5">
                        <label for="votecode" class="text-danger">Enter Vote Code</label>
                        <input type="text" class="form-control" id="votecode">
                        <label for="votecode" class="text-danger mt-2">Enter Email Address</label>
                        <input type="text" class="form-control" id="votecode">
                        <button type="submit" name="Submit" class="mt-3 btn btn-outline-secondary">Submit</button>
                    </div>

                </div>
            </div>
        </form>
    </div>
</div>
@endsection
